<?php

namespace App\Admin\Controllers\Reports;

use App\Models\StoreSoketoan;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class StoreReportNhapxuattonChitietController extends Controller
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

            $content->body(view('admin.reports.nhapxuatton_chitiet.index'));
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
        return Admin::grid(StoreSoketoan::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('ma_soketoan', __('models.store_soketoan.ma_soketoan'));
            $grid->column('ngay_batdau', __('models.store_soketoan.ngay_batdau'));
            $grid->column('ngay_ketthuc', __('models.store_soketoan.ngay_ketthuc'));
            $grid->column('ngay_khoaso', __('models.store_soketoan.ngay_khoaso'));

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
        return Admin::form(StoreSoketoan::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('ma_soketoan', __('models.store_soketoan.ma_soketoan'));
            $form->datetime('ngay_batdau', __('models.store_soketoan.ngay_batdau'));
            $form->datetime('ngay_ketthuc', __('models.store_soketoan.ngay_ketthuc'));
            $form->datetime('ngay_khoaso', __('models.store_soketoan.ngay_khoaso'));

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
