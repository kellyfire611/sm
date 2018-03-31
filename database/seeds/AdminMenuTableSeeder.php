<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();
        DB::table('admin_menu')->insert(
            [
                /* --- Cấu hình kho --- */
                ["id" => 8, "parent_id" => 0, "order" => 8, "title" => "Cấu hình kho", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 9, "parent_id" => 8, "order" => 9, "title" => "Danh mục Loại kho", "icon" => "fa-bar-chart", "uri" => "/store/loai_kho", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 10, "parent_id" => 8, "order" => 10, "title" => "Danh mục Kho", "icon" => "fa-bar-chart", "uri" => "/store/kho", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 11, "parent_id" => 8, "order" => 11, "title" => "Danh mục Cấu hình Kho", "icon" => "fa-bar-chart", "uri" => "/store/loai_kho_rel", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 20, "parent_id" => 8, "order" => 20, "title" => "Danh mục Nhập xuất", "icon" => "fa-bar-chart", "uri" => "/store/nhapxuat", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 21, "parent_id" => 8, "order" => 21, "title" => "Danh mục Loại Nhập xuất", "icon" => "fa-bar-chart", "uri" => "/store/loai_nhapxuat", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Cấu hình kho --- */
                /* --- Đầu kỳ --- */
                ["id" => 12, "parent_id" => 0, "order" => 12, "title" => "Đầu kỳ", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 13, "parent_id" => 12, "order" => 13, "title" => "Sổ kế toán", "icon" => "fa-bar-chart", "uri" => "/store/soketoan", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Đầu kỳ --- */
                /* --- Cung cấp --- */
                ["id" => 14, "parent_id" => 0, "order" => 14, "title" => "Cung cấp", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 15, "parent_id" => 14, "order" => 15, "title" => "Chương trình cung cấp", "icon" => "fa-bar-chart", "uri" => "/store/chuongtrinh", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 18, "parent_id" => 14, "order" => 18, "title" => "Nguồn cung cấp", "icon" => "fa-bar-chart", "uri" => "/store/nguoncungcap", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 19, "parent_id" => 14, "order" => 19, "title" => "Nhà cung cấp", "icon" => "fa-bar-chart", "uri" => "/store/nhacungcap", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Cung cấp --- */
                /* --- Đơn vị tính --- */
                ["id" => 16, "parent_id" => 0, "order" => 16, "title" => "Đơn vị tính", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 17, "parent_id" => 16, "order" => 17, "title" => "Đơn vị tính", "icon" => "fa-bar-chart", "uri" => "/store/donvitinh", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Đơn vị tính --- */
                /* --- Sản phẩm --- */
                ["id" => 22, "parent_id" => 0, "order" => 22, "title" => "Sản phẩm", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 23, "parent_id" => 22, "order" => 23, "title" => "Sản phẩm", "icon" => "fa-bar-chart", "uri" => "/store/sanpham", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 24, "parent_id" => 22, "order" => 24, "title" => "Loại Sản phẩm", "icon" => "fa-bar-chart", "uri" => "/store/loai_sanpham", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 25, "parent_id" => 22, "order" => 25, "title" => "Nhóm Sản phẩm", "icon" => "fa-bar-chart", "uri" => "/store/nhom_sanpham", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 26, "parent_id" => 22, "order" => 26, "title" => "Phân Sản phẩm, nhóm, loại", "icon" => "fa-bar-chart", "uri" => "/store/loai_nhom_sanpham_rel", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Sản phẩm --- */
                /* --- Nhập --- */
                ["id" => 27, "parent_id" => 0, "order" => 27, "title" => "Nhập", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 28, "parent_id" => 27, "order" => 28, "title" => "Nhập tồn đầu kỳ", "icon" => "fa-bar-chart", "uri" => "/store/phieunhap_tondauky", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- Nhập --- */
                /* --- Xuất --- */
                ["id" => 29, "parent_id" => 0, "order" => 29, "title" => "Xuất", "icon" => "fa-bar-chart", "uri" => "", "created_at" => $now, "updated_at" => NULL,],
                ["id" => 30, "parent_id" => 29, "order" => 30, "title" => "Xuất qua kho lẻ", "icon" => "fa-bar-chart", "uri" => "/store/phieuxuat_quakhole", "created_at" => $now, "updated_at" => NULL,],
                /* ./. --- xuất --- */
            ]
        );

        DB::statement('ALTER TABLE `store_kho_loai_rel` AUTO_INCREMENT=1;');
    }
}
