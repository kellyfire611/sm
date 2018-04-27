<?php

namespace App\Admin\Controllers;

use App\Models\StorePhieuxuat;
use App\Models\StoreNhacungcap;
use App\Models\StoreSoketoan;
use App\Models\StoreKho;
use App\Models\StorePhieuxuatChitiet;
use App\Models\StoreSanpham;
use App\Models\StoreDonvitinh;
use App\Models\StoreSystemConfig;
use App\Models\CommonModel;
use App\Admin\Controllers\V1\ApiDataController;

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
use Carbon\Carbon;

class StorePhieuxuatController extends Controller
{
    use ModelForm;
    use ApiDataController;

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
            $sophieuxuat = $form->text('so_phieuxuat', __('models.store_phieuxuat.so_phieuxuat'))
                ->rules('required')
                ->useTableDiv()
                ->readOnly()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);
            $ngayXuatKho = $form->datetime('ngay_xuatkho', __('models.store_phieuxuat.ngay_xuatkho'))
                ->rules('required')
                ->useTableDiv()
                ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                ->setWidth(12, 12, 3);

            $ajaxGenerateSoPhieuXuatUrl = route('store.ajax.generateSoPhieuXuat');
            $script = <<<EOT
/* variable to track what kind of blur event is fired */
var _isWindowBlurEvent = false;

window.onblur = function(e)
{
    _isWindowBlurEvent = true;
}

window.onfocus = function(e)
{
    _isWindowBlurEvent = false;
}

    $("{$ngayXuatKho->getElementClassSelector()}").blur(function() {
        if(! _isWindowBlurEvent ) //if the event is Element.onBlur 
		{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            
            $.ajax({
                type: 'post',
                url: '$ajaxGenerateSoPhieuXuatUrl',
                dataType: 'json',
                data: {
                    nhapxuat: 'xkl'
                },
                beforeSend: function(){
                    $('<div />').attr('class', 'loading').appendTo('body');
                },
                success: function(data) {
                    console.log(data);
                    $("{$sophieuxuat->getElementClassSelector()}").val(data.msg);
                    $('.loading').remove();
                },
                error: function(data) {
                    console.log(data);
                }
            }).done(function(data) {
                $("#{$sophieuxuat->getIdString()}-cssloader").fadeOut(100);
            });
        }
    });

function format(item, state) {
    if (!item.id) {
        return item.text;
    }
    var countryUrl = "https://lipis.github.io/flag-icon-css/flags/4x3/";
    var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
    var url = state ? stateUrl : countryUrl;
    var img = $("<img>", {
        class: "img-flag",
        width: 26,
        src: url + item.element.value.toLowerCase() + ".svg"
    });
    var span = $("<span>", {
        text: " " + item.text
    });
    span.prepend(img);
    return span;
}
        
EOT;
         
            $form->script($script);

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
$templateResult = <<<EOT
function(item) {
    return format(item, false);
}
EOT;

                $sanpham = $form->select('sanpham_id', __('models.store_sanpham_nhom_loai_rel.sanpham_id'))
                    ->rules('required')
                    //->options(StoreSanpham::selectboxData())
                    ->options($this->getDanhSachSanPhamConSoLuong(1, Carbon::now()))
                    // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                    ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                    ->useTableDiv()
                    ->templateResult($templateResult)
                    ->setWidth(12, 12, 9);

                    //dd($sanpham->getElementClassSelector());

                $scriptSanPham = <<<EOT
$("{$sanpham->getElementClassSelector()}").select2({
    ajax: {
        url: "https://api.github.com/search/repositories",
        dataType: 'json',
        delay: 250,
        data: function (params) {
        return {
            q: params.term, // search term
            page: params.page
        };
        },
        processResults: function (data, params) {
        // parse the results into the format expected by Select2
        // since we are using custom formatting functions we do not need to
        // alter the remote JSON data, except to indicate that infinite
        // scrolling can be used
        params.page = params.page || 1;
    
        return {
            results: data.items,
            pagination: {
            more: (params.page * 30) < data.total_count
            }
        };
        },
        cache: true
    },
    placeholder: 'Search for a repository',
    escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
    minimumInputLength: 1,
    templateResult: formatRepo,
    templateSelection: formatRepoSelection
});

function formatRepo (repo) {
    if (repo.loading) {
        return repo.text;
    }
    
    var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
        "<div class='select2-result-repository__meta'>" +
        "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
    
    if (repo.description) {
        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
    }
    
    markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
    "</div>" +
    "</div></div>";
    
    return markup;
}
    
function formatRepoSelection (repo) {
    return repo.full_name || repo.text;
}
EOT;

                //$form->script($scriptSanPham);

                // $form->select('donvitinh_id', __('models.store_phieuxuat_chitiet.donvitinh_id'))
                //     // ->rules('required')
                //     ->options(StoreDonvitinh::selectboxData())
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setWidth(12, 12, 1);
                // $form->text('so_lo', __('models.store_phieuxuat_chitiet.so_lo'))
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setWidth(12, 12, 1);
                // $form->text('so_chungtu', __('models.store_phieuxuat_chitiet.so_chungtu'))
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setWidth(12, 12, 1);
                // $form->datetime('hansudung', __('models.store_phieuxuat_chitiet.hansudung'))
                //     // ->renderStyle(CommonModel::RENDER_STYLE_ONLY_CONTROL)
                //     ->labelPosition(CommonModel::LABEL_POSITION_TOP)
                //     ->useTableDiv()
                //     ->setWidth(12, 12, 3);
                $form->currency('dongiaxuat', __('models.store_phieuxuat_chitiet.dongiaxuat'))
                    ->rules('required')
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

            $form->savingInTransaction(function (Form $form) {
                $model = $form->model();

                // Cập nhật SystemConfig Số phiếu xuất
                $systemConfigSoPhieuXuat = StoreSystemConfig::where('name', '=', 'store.sophieuxuat')->first();
                $arrSystemConfigSoPhieuXuat = json_decode($systemConfigSoPhieuXuat->value, true);

                $prefix = substr($model->so_phieuxuat, 0, 3);
                $num = substr($model->so_phieuxuat, 3);
                $arrSystemConfigSoPhieuXuat[$prefix] = $num;

                $newValueSystemConfigSoPhieuXuat = json_encode($arrSystemConfigSoPhieuXuat);

                $systemConfigSoPhieuXuat->value = $newValueSystemConfigSoPhieuXuat;
                $systemConfigSoPhieuXuat->save();
            });

            $form->savingInTransactionDetailHasMany(function (Form $form, $instance) {
                $instance->xuat_tu_kho_id = $form->model()->xuat_tu_kho_id;
                $instance->nhapxuat_id = $form->model()->nhapxuat_id;
                //dd($instance);
            });

            $form->display('created_at', __('models.common.created_at'));
            $form->display('updated_at', __('models.common.updated_at'));
        });
    }
}
