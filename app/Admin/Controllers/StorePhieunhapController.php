<?php

namespace App\Admin\Controllers;

use App\Models\StorePhieunhap;
use App\Models\StoreNhacungcap;
use App\Models\StoreSoketoan;
use App\Models\StoreKho;
use App\Models\StorePhieunhapChitiet;
use App\Models\StoreSanpham;
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

class StorePhieunhapController extends Controller
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
        return Admin::grid(StorePhieunhap::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('so_phieunhap', __('models.store_phieunhap.so_phieunhap'));
            $grid->column('ngay_nhapkho', __('models.store_phieunhap.ngay_nhapkho'));
            $grid->column('ngay_laphoadon', __('models.store_phieunhap.ngay_laphoadon'));
            $grid->column('ngay_xacnhan', __('models.store_phieunhap.ngay_xacnhan'));
            $grid->column('lydo_nhap', __('models.store_phieunhap.lydo_nhap'));
            $grid->column('nguoi_giaohang', __('models.store_phieunhap.nguoi_giaohang'));
            $grid->column('so_chungtu', __('models.store_phieunhap.so_chungtu'));
            $grid->column('nhapxuat_id', __('models.store_phieunhap.nhapxuat_id'));
            $grid->column('phieuxuat_id', __('models.store_phieunhap.phieuxuat_id'));
            $grid->column('nhacungcap_id', __('models.store_phieunhap.nhacungcap_id'));
            $grid->column('chuongtrinh_id', __('models.store_phieunhap.chuongtrinh_id'));
            $grid->column('soketoan_id', __('models.store_phieunhap.soketoan_id'));
            $grid->column('nhap_tu_kho_id', __('models.store_phieunhap.nhap_tu_kho_id'));
            $grid->column('nhap_vao_kho_id', __('models.store_phieunhap.nhap_vao_kho_id'));
            $grid->column('nguoi_lapphieu_id', __('models.store_phieunhap.nguoi_lapphieu_id'));

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
        return Admin::form(StorePhieunhap::class, function (Form $form) {
            //$form->setWidth(2, 2);
            $form->tools(function (Form\Tools $tools) {

                // Disable back btn.
                //$tools->disableBackButton();
            
                // Disable list btn
                //$tools->disableListButton();
            
                // Add a button, the argument can be a string, or an instance of the object that implements the Renderable or Htmlable interface
                $tools->add('<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;delete</a>');
            });

            $form->display('id', 'ID');
            $form->hidden('nhapxuat_id', __('models.store_phieunhap.nhapxuat_id'))->default(45);

            $form->text('so_phieunhap', __('models.store_phieunhap.so_phieunhap'));
            $form->datetime('ngay_nhapkho', __('models.store_phieunhap.ngay_nhapkho'));
            $form->datetime('ngay_laphoadon', __('models.store_phieunhap.ngay_laphoadon'));
            $form->datetime('ngay_xacnhan', __('models.store_phieunhap.ngay_xacnhan'));
            $form->text('lydo_nhap', __('models.store_phieunhap.lydo_nhap'));
            $form->text('nguoi_giaohang', __('models.store_phieunhap.nguoi_giaohang'));
            $form->text('so_chungtu', __('models.store_phieunhap.so_chungtu'));

            $form->select('nhacungcap_id', __('models.store_phieunhap.nhacungcap_id'))->options(
                StoreNhacungcap::NoneDelete()->pluck('ten_nhacungcap', 'id')
            )->rules('required');

            $form->select('soketoan_id', __('models.store_phieunhap.soketoan_id'))->options(
                StoreSoketoan::NoneDelete()->pluck('ma_soketoan', 'id')
            )->rules('required');

            $form->select('nhap_vao_kho_id', __('models.store_phieunhap.nhap_vao_kho_id'))
                ->options(StoreKho::selectboxData())
                //->load('nhap_vao_kho', '')
                ->rules('required');

            $form->select('nguoi_lapphieu_id', __('models.store_phieunhap.nguoi_lapphieu_id'))->options(
                Administrator::all()->pluck('username', 'id')
            )->rules('required');

            $form->hasMany('chitiet', 'Chi tiết', function (Form\NestedForm $form) {
                $form->hidden('nhapxuat_id', __('models.store_phieunhap_chitiet.nhapxuat_id'))->default(45);
                $form->hidden('soketoan_id',  __('models.store_phieunhap_chitiet.soketoan_id'))->default(1);
                //$form->hidden('nhap_vao_kho_id', __('models.store_phieunhap_chitiet.nhap_vao_kho_id'))->default(1);

                $form->select('nhap_vao_kho_id', __('models.store_phieunhap_chitiet.nhap_vao_kho_id'))
                ->options(StoreKho::selectboxData())
                //->load('nhap_vao_kho', '')
                ->rules('required');

                $form->select('sanpham_id', __('models.store_sanpham_nhom_loai_rel.sanpham_id'))->options(StoreSanpham::selectboxData());

                $form->hidden('donvitinh_id', __('models.store_phieunhap_chitiet.donvitinh_id'))->default(1);

                $form->text('so_lo', __('models.store_phieunhap_chitiet.so_lo'));
                $form->text('so_chungtu', __('models.store_phieunhap_chitiet.so_chungtu'));
                $form->datetime('hansudung', __('models.store_phieunhap_chitiet.hansudung'));
                

                $form->currency('dongianhap', __('models.store_phieunhap_chitiet.dongianhap'));
                $form->currency('soluongnhap', __('models.store_phieunhap_chitiet.soluongnhap'));
                $form->currency('soluong_conlai', __('models.store_phieunhap_chitiet.soluong_conlai'));
                $form->currency('thue', __('models.store_phieunhap_chitiet.thue'));
                
                //$form->datetime('ngay_sudungdautien', __('models.store_phieunhap_chitiet.ngay_sudungdautien'));
            });

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
