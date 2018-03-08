<?php

namespace App\Admin\Controllers;

use App\Models\StorePhieunhap;
use App\Models\StoreNhacungcap;
use App\Models\StoreSoketoan;
use App\Models\StoreKho;
use App\Models\StorePhieunhapChitiet;
use Encore\Admin\Auth\Database\Administrator;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

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

            $form->display('id', 'ID');

            $form->text('so_phieunhap', __('models.store_phieunhap.so_phieunhap'));
            $form->datetime('ngay_nhapkho', __('models.store_phieunhap.ngay_nhapkho'));
            $form->datetime('ngay_laphoadon', __('models.store_phieunhap.ngay_laphoadon'));
            $form->datetime('ngay_xacnhan', __('models.store_phieunhap.ngay_xacnhan'));
            $form->text('lydo_nhap', __('models.store_phieunhap.lydo_nhap'));
            $form->text('nguoi_giaohang', __('models.store_phieunhap.nguoi_giaohang'));
            $form->text('so_chungtu', __('models.store_phieunhap.so_chungtu'));
            $form->hidden('nhapxuat_id', __('models.store_phieunhap.so_chungtu'))->default(45);

            $form->select('nhacungcap_id', __('models.store_phieunhap.nhacungcap_id'))->options(
                StoreNhacungcap::NoneDelete()->pluck('ten_nhacungcap', 'id')
            )->rules('required');

            $form->select('soketoan_id', __('models.store_phieunhap.soketoan_id'))->options(
                StoreSoketoan::NoneDelete()->pluck('ma_soketoan', 'id')
            )->rules('required');

            $form->select('nhap_vao_kho_id', __('models.store_phieunhap.nhap_vao_kho_id'))->options(
                StoreKho::NoneDelete()->pluck('ten_kho', 'id')
            )->rules('required');

            $form->select('nguoi_lapphieu_id', __('models.store_phieunhap.nguoi_lapphieu_id'))->options(
                Administrator::all()->pluck('username', 'id')
            )->rules('required');

            $form->hasMany('chitiet', 'Chi tiết', function (Form\NestedForm $form) {
                $form->datetime('ngay_sudungdautien', __('models.store_phieunhap_chitiet.ngay_sudungdautien'));
                $form->currency('dongianhap', __('models.store_phieunhap_chitiet.dongianhap'));
                $form->currency('soluongnhap', __('models.store_phieunhap_chitiet.soluongnhap'));
                $form->currency('soluong_conlai', __('models.store_phieunhap_chitiet.soluong_conlai'));
                $form->currency('thue', __('models.store_phieunhap_chitiet.thue'));
                $form->datetime('hansudung', __('models.store_phieunhap_chitiet.hansudung'));
                $form->text('so_lo', __('models.store_phieunhap_chitiet.so_lo'));
                $form->text('so_chungtu', __('models.store_phieunhap_chitiet.so_chungtu'));
            });

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
