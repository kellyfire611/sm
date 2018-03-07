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
                /* ./. --- Cấu hình kho --- */
            ]
        );

        DB::statement('ALTER TABLE `store_kho_loai_rel` AUTO_INCREMENT=1;');
    }
}
