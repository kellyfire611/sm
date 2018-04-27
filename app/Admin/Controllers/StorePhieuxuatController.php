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
use Auth;

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

            $content->header('Danh sách phiếu xuất');
            $content->description('');

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

            $content->header('Sửa phiếu xuất');
            $content->description('');

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

            $content->header('Tạo phiếu xuất');
            $content->description('');

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

            $grid->actions(function ($actions) {
                $token = csrf_token();
                $route = route('store.print', ['view' => 'bieumau_phieuxuat']);
                $id = $actions->getKey();
                $actions->append('
                    <form method="post" action="'.$route.'">
                        <input type="hidden" name="_token" value="'.$token.'" />
                        <input type="hidden" name="phieuxuat_id" value="'.$id.'" />
                        <button class="btn btn-sm btn-primary grid-refresh" type="submit"><i class="fa fa-refresh"></i> In phiếu</button>
                    </form>');
            });
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
            //$form->display('id', 'ID');
            $form->text('so_phieuxuat', __('models.store_phieuxuat.so_phieuxuat'))
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->datetime('ngay_xuatkho', __('models.store_phieuxuat.ngay_xuatkho'))
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->datetime('ngay_xacnhan', __('models.store_phieuxuat.ngay_xacnhan'))
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->text('lydo_xuat', __('models.store_phieuxuat.lydo_xuat'))
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);

            $form->text('nguoi_nhanhang', __('models.store_phieuxuat.nguoi_nhanhang'))
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->text('so_chungtu', __('models.store_phieuxuat.so_chungtu'))
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->select('nhacungcap_id', __('models.store_phieuxuat.nhacungcap_id'))
                ->options(StoreNhacungcap::selectboxData())
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->select('soketoan_id', __('models.store_phieuxuat.soketoan_id'))
                ->rules('required')
                ->options(StoreSoketoan::selectBoxData())
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);

            $form->select('xuat_tu_kho_id', __('models.store_phieuxuat.xuat_tu_kho_id'))
                ->rules('required')
                ->options(StoreKho::selectboxData())
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $form->select('xuat_den_kho_id', __('models.store_phieuxuat.xuat_den_kho_id'))
                ->rules('required')
                ->options(StoreKho::selectboxData())
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
                //dd(Admin::user());
            $form->select('nguoi_lapphieu_id', __('models.store_phieuxuat.nguoi_lapphieu_id'))
                ->options(CommonModel::administratorSelectboxData())
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->default(Admin::user()->id)
                ->setWidth(12, 12, 6);

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
                $form->hidden('cotinhphi', __('models.store_phieuxuat_chitiet.cotinhphi'))
                    ->default(1);

                // Show field
                $form->select('sanpham_id', __('models.store_sanpham_nhom_loai_rel.sanpham_id'))
                    ->rules('required')
                    ->options(StoreSanpham::selectboxData())
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 3);
                $form->select('donvitinh_id', __('models.store_phieuxuat_chitiet.donvitinh_id'))
                    ->rules('required')
                    ->options(StoreDonvitinh::selectboxData())
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                $form->text('so_lo', __('models.store_phieuxuat_chitiet.so_lo'))
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                $form->text('so_chungtu', __('models.store_phieuxuat_chitiet.so_chungtu'))
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                $form->datetime('hansudung', __('models.store_phieuxuat_chitiet.hansudung'))
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                $form->currency('dongiaxuat', __('models.store_phieuxuat_chitiet.dongiaxuat'))
                    ->addElementClass(['dongia'])
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                $form->currency('soluongxuat', __('models.store_phieuxuat_chitiet.soluongxuat'))
                    ->rules('required')
                    ->addElementClass(['soluong'])
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->setWidth(12, 12, 1);
                // $form->currency('thue', __('models.store_phieuxuat_chitiet.thue'))
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setViewWidth(1);       
                // $form->switch('cotinhphi', __('models.store_phieuxuat_chitiet.cotinhphi'))->states(CommonModel::getYesNo())
                //     ->default(1)
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setWidth(12, 12, 1);
                //$form->datetime('ngay_sudungdautien', __('models.store_phieuxuat_chitiet.ngay_sudungdautien'));
            })->useTableDiv();

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
