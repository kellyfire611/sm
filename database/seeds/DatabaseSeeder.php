<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa data
        DB::delete('delete from admin_menu');
        DB::delete('delete from users');

        DB::delete('delete from hrm_quocgia');
        DB::delete('delete from hrm_tinhthanh');
        DB::delete('delete from hrm_quanhuyen');
        DB::delete('delete from hrm_xaphuong');

        DB::delete('delete from store_kho_nhapxuat_rel');
        DB::delete('delete from store_kho_loai_rel');
        DB::delete('delete from store_kho_loai');
        DB::delete('delete from store_kho');
        DB::delete('delete from store_nhapxuat_loai_rel');
        DB::delete('delete from store_nhapxuat_loai');
        DB::delete('delete from store_nhapxuat');
        DB::delete('delete from store_sanpham_nhom_loai_rel');
        DB::delete('delete from store_sanpham_loai');
        DB::delete('delete from store_sanpham_nhom');
        DB::delete('delete from store_sanpham');
        DB::delete('delete from store_donvitinh');
        DB::delete('delete from store_soketoan');
        DB::delete('delete from store_nguoncungcap');

        $this->call(UsersTableSeeder::class);

        /* --- HRM --- */
        // Quốc gia
        $this->call(HrmQuocgiaTableSeeder::class);
        $this->call(HrmTinhthanhTableSeeder::class);
        $this->call(HrmQuanhuyenTableSeeder::class);
        $this->call(HrmXaphuongTableSeeder::class);
        /* ./. --- HRM --- */

        /* --- Store --- */
        // Sổ kế toán
        $this->call(StoreSoketoanTableSeeder::class);

        $this->call(StoreNguoncungcapTableSeeder::class);

        // Loại kho
        $this->call(StoreKhoLoaiTableSeeder::class);
        $this->call(StoreKhoTableSeeder::class);
        $this->call(StoreKhoLoaiRelTableSeeder::class);

        // Loại Nhập xuất
        $this->call(StoreNhapxuatTableSeeder::class);
        $this->call(StoreNhapxuatLoaiTableSeeder::class);
        $this->call(StoreNhapxuatLoaiRelTableSeeder::class);

        // Cấu hình kho


        // Sản phẩm
        $this->call(StoreSanphamLoaiTableSeeder::class);
        $this->call(StoreSanphamNhomTableSeeder::class);
        $this->call(StoreSanphamTableSeeder::class);
        $this->call(StoreSanphamNhomLoaiRelTableSeeder::class);

        // Đơn vị tính
        $this->call(StoreDonvitinhTableSeeder::class);

        /* ./. --- Store --- */

        /* --- Admin Menu --- */
        $this->call(AdminMenuTableSeeder::class);
        /* ./. --- Admin Menu --- */
    }
}
