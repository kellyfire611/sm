<?php

namespace App\Admin\Controllers;

use App\Models\StorePhieuxuat;
use App\Models\StoreNhacungcap;
use App\Models\StoreSoketoan;
use App\Models\StoreKho;
use App\Models\StorePhieuxuatChitiet;
use App\Models\StoreSanpham;
use App\Models\StoreDonvitinh;
use App\Models\CommonModel;
use Encore\Admin\Auth\Database\Administrator;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Encore\Admin\Form\Field\Hidden;

class StorePhieuxuatController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(StorePhieuxuat::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('so_phieuxuat', __('models.store_phieuxuat.so_phieuxuat'));
            $grid->column('ngay_xuatkho', __('models.store_phieuxuat.ngay_xuatkho'));
            $grid->column('ngay_xacnhan', __('models.store_phieuxuat.ngay_xacnhan'));
            $grid->column('lydo_xuat', __('models.store_phieuxuat.lydo_xuat'));
            $grid->column('nguoi_giaohang', __('models.store_phieuxuat.nguoi_giaohang'));
            $grid->column('so_chungtu', __('models.store_phieuxuat.so_chungtu'));
            $grid->column('xuatxuat_id', __('models.store_phieuxuat.nhapxuat_id'));
            $grid->column('phieuxuat_id', __('models.store_phieuxuat.phieuxuat_id'));
            $grid->column('nhacungcap_id', __('models.store_phieuxuat.nhacungcap_id'));
            $grid->column('chuongtrinh_id', __('models.store_phieuxuat.chuongtrinh_id'));
            $grid->column('soketoan_id', __('models.store_phieuxuat.soketoan_id'));
            $grid->column('xuat_tu_kho_id', __('models.store_phieuxuat.xuat_tu_kho_id'));
            $grid->column('xuat_den_kho_id', __('models.store_phieuxuat.xuat_den_kho_id'));
            $grid->column('nguoi_lapphieu_id', __('models.store_phieuxuat.nguoi_lapphieu_id'));

            $grid->created_at(__('models.common.created_at'));
            $grid->updated_at(__('models.common.updated_at'));
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(StorePhieuxuat::class, function (Form $form) {
            // Hidden field
            $form->hidden('nhapxuat_id', __('models.store_phieuxuat.nhapxuat_id'))
                ->default(CommonModel::getNhapXuat()['_XUAT_QUA_KHO_LE_']);
            
            // Show field
            $form->display('id', 'ID');
            $form->text('so_phieuxuat', __('models.store_phieuxuat.so_phieuxuat'));
            $form->datetime('ngay_xuatkho', __('models.store_phieuxuat.ngay_xuatkho'));
            $form->datetime('ngay_xacnhan', __('models.store_phieuxuat.ngay_xacnhan'));
            $form->text('lydo_xuat', __('models.store_phieuxuat.lydo_xuat'));
            $form->text('nguoi_nhanhang', __('models.store_phieuxuat.nguoi_nhanhang'));
            $form->text('so_chungtu', __('models.store_phieuxuat.so_chungtu'));
            $form->select('nhacungcap_id', __('models.store_phieuxuat.nhacungcap_id'))
                ->options(StoreNhacungcap::selectboxData())
                ->rules('required');
            $form->select('soketoan_id', __('models.store_phieuxuat.soketoan_id'))
                ->options(StoreSoketoan::selectBoxData())
                ->rules('required');
            $form->select('xuat_tu_kho_id', __('models.store_phieuxuat.xuat_tu_kho_id'))
                ->options(StoreKho::selectboxData())
                ->rules('required');
            $form->select('xuat_den_kho_id', __('models.store_phieuxuat.xuat_den_kho_id'))
                ->options(StoreKho::selectboxData())
                ->rules('required');
            $form->select('nguoi_lapphieu_id', __('models.store_phieuxuat.nguoi_lapphieu_id'))
                ->options(Administrator::selectboxData())
                ->rules('required');

            $form->hasMany('chitiet', 'Chi tiết', function (Form\NestedForm $form) {
                // Hidden field
                $form->hidden('nhapxuat_id', __('models.store_phieuxuat_chitiet.nhapxuat_id'))
                    ->default(CommonModel::getNhapXuat()['_XUAT_QUA_KHO_LE_']);
                $form->hidden('soketoan_id',  __('models.store_phieuxuat_chitiet.soketoan_id'))
                    ->default(1);
                $form->hidden('xuat_tu_kho_id', __('models.store_phieuxuat_chitiet.xuat_tu_kho_id'))
                    ->default(1);
                $form->hidden('phieunhap_chitiet_id', __('models.store_phieuxuat_chitiet.phieunhap_chitiet_id'))
                    ->default(1);

                // Show field
                $form->select('sanpham_id', __('models.store_sanpham_nhom_loai_rel.sanpham_id'))
                    ->options(StoreSanpham::selectboxData());
                $form->select('donvitinh_id', __('models.store_phieuxuat_chitiet.donvitinh_id'))
                    ->options(StoreDonvitinh::selectboxData());
                $form->text('so_lo', __('models.store_phieuxuat_chitiet.so_lo'));
                $form->text('so_chungtu', __('models.store_phieuxuat_chitiet.so_chungtu'));
                $form->datetime('hansudung', __('models.store_phieuxuat_chitiet.hansudung'));
                $form->currency('dongiaxuat', __('models.store_phieuxuat_chitiet.dongiaxuat'));
                $form->currency('soluongxuat', __('models.store_phieuxuat_chitiet.soluongxuat'));
                $form->currency('thue', __('models.store_phieuxuat_chitiet.thue'));          
                $form->switch('cotinhphi', __('models.store_phieuxuat_chitiet.cotinhphi'))->states(CommonModel::getYesNo());
                //$form->datetime('ngay_sudungdautien', __('models.store_phieuxuat_chitiet.ngay_sudungdautien'));
            });

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
