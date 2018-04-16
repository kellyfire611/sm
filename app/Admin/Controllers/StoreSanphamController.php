<?php

namespace App\Admin\Controllers;

use App\Models\StoreSanpham;
use App\Models\HrmQuocgia;
use App\Admin\Extensions\Exporters\StoreSanPhamExcelExporter;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class StoreSanphamController extends Controller
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
        return Admin::grid(StoreSanpham::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('anh')->image();
            $grid->column('ma_sanpham', __('models.store_sanpham.ma_sanpham'));
            $grid->column('ten_sanpham', __('models.store_sanpham.ten_sanpham'));
            $grid->column('ten_hoatchat', __('models.store_sanpham.ten_hoatchat'));
            $grid->column('nongdo_hamluong', __('models.store_sanpham.nongdo_hamluong'));
            $grid->column('sokiemsoat', __('models.store_sanpham.sokiemsoat'));
            $grid->column('nha_sanxuat_id', __('models.store_sanpham.nha_sanxuat_id'));
            $grid->column('nuoc_sanxuat_id', __('models.store_sanpham.nuoc_sanxuat_id'));

            $grid->created_at(__('models.common.created_at'));
            $grid->updated_at(__('models.common.updated_at'));

            $grid->exporter(new StoreSanPhamExcelExporter());
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(StoreSanpham::class, function (Form $form) {                   

            $form->display('id', 'ID');

            $form->text('ma_sanpham', __('models.store_sanpham.ma_sanpham'))
                ->append('<i class="fa fa-pencil"></i>');
            $form->button('aaaaaaaaaaa')->on('click', 
'alert("hello");'
            );
            $form->text('ten_sanpham', __('models.store_sanpham.ten_sanpham'));
            $form->text('ten_hoatchat', __('models.store_sanpham.ten_hoatchat'));
            $form->text('nongdo_hamluong', __('models.store_sanpham.nongdo_hamluong'));
            $form->text('sokiemsoat', __('models.store_sanpham.sokiemsoat'));
            $form->image('anh');

            $form->select('nuoc_sanxuat_id', __('models.store_sanpham.nuoc_sanxuat_id'))->options(
                HrmQuocgia::NoneDelete()->pluck('ten_quocgia', 'id')
            )->rules('required');

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
