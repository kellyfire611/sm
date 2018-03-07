<?php

return [

    'common' => [
        'created_at' => 'Ngày khởi tạo',
        'updated_at' => 'Ngày cập nhật',
        'deleted_at' => 'Ngày xóa'
    ],



    'admin_menu' => ['id' => 'id','parent_id' => 'parent_id','order' => 'order','title' => 'title','icon' => 'icon','uri' => 'uri','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_operation_log' => ['id' => 'id','user_id' => 'user_id','path' => 'path','method' => 'method','ip' => 'ip','input' => 'input','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_permissions' => ['id' => 'id','name' => 'name','slug' => 'slug','http_method' => 'http_method','http_path' => 'http_path','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_roles' => ['id' => 'id','name' => 'name','slug' => 'slug','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_role_menu' => ['role_id' => 'role_id','menu_id' => 'menu_id','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_role_permissions' => ['role_id' => 'role_id','permission_id' => 'permission_id','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_role_users' => ['role_id' => 'role_id','user_id' => 'user_id','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_users' => ['id' => 'id','username' => 'username','password' => 'password','name' => 'name','avatar' => 'avatar','remember_token' => 'remember_token','created_at' => 'created_at','updated_at' => 'updated_at',],
'admin_user_permissions' => ['user_id' => 'user_id','permission_id' => 'permission_id','created_at' => 'created_at','updated_at' => 'updated_at',],
'hrm_noichon_rel' => ['id' => 'id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','quocgia_id' => 'quocgia_id','tinhthanh_id' => 'tinhthanh_id','quanhuyen_id' => 'quanhuyen_id','xaphuong_id' => 'xaphuong_id',],
'hrm_quanhuyen' => ['id' => 'id','ma_quanhuyen' => 'ma_quanhuyen','ten_quanhuyen' => 'ten_quanhuyen','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'hrm_quocgia' => ['id' => 'id','ma_quocgia' => 'ma_quocgia','ten_quocgia' => 'ten_quocgia','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'hrm_tinhthanh' => ['id' => 'id','ma_tinhthanh' => 'ma_tinhthanh','ten_tinhthanh' => 'ten_tinhthanh','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'hrm_xaphuong' => ['id' => 'id','ma_xaphuong' => 'ma_xaphuong','ten_xaphuong' => 'ten_xaphuong','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'migrations' => ['id' => 'id','migration' => 'migration','batch' => 'batch',],
'password_resets' => ['email' => 'email','token' => 'token','created_at' => 'created_at',],
'store_donvitinh' => ['id' => 'id','ma_donvitinh' => 'ma_donvitinh','ten_donvitinh' => 'ten_donvitinh','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'store_kho' => ['id' => 'id','ma_kho' => 'Mã kho','ten_kho' => 'Tên kho','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_kho_loai' => ['id' => 'id','ma_loai_kho' => 'ma_loai_kho','ten_loai_kho' => 'ten_loai_kho','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_kho_loai_rel' => ['id' => 'id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','kho_id' => 'kho_id','kho_loai_id' => 'kho_loai_id','company_id' => 'company_id',],
'store_kho_nhapxuat_rel' => ['id' => 'id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','tu_kho_id' => 'tu_kho_id','den_kho_id' => 'den_kho_id','nhapxuat_id' => 'nhapxuat_id',],
'store_nguoncungcap' => ['id' => 'id','ma_nguoncungcap' => 'ma_nguoncungcap','ten_nguoncungcap' => 'ten_nguoncungcap','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_nhacungcap' => ['id' => 'id','ma_nhacungcap' => 'ma_nhacungcap','ten_nhacungcap' => 'ten_nhacungcap','diachi_nhacungcap' => 'diachi_nhacungcap','sodienthoai_nhacungcap' => 'sodienthoai_nhacungcap','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_nhapxuat' => ['id' => 'id','ma_nhapxuat' => 'ma_nhapxuat','ten_nhapxuat' => 'ten_nhapxuat','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_nhapxuat_loai' => ['id' => 'id','ma_loai_nhapxuat' => 'ma_loai_nhapxuat','ten_loai_nhapxuat' => 'ten_loai_nhapxuat','la_nhap' => 'la_nhap','la_noibo' => 'la_noibo','la_hoantra' => 'la_hoantra','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'store_nhapxuat_loai_rel' => ['id' => 'id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','nhapxuat_id' => 'nhapxuat_id','nhapxuat_loai_id' => 'nhapxuat_loai_id',],
'store_phieunhap' => ['id' => 'id','so_phieunhap' => 'so_phieunhap','ngay_nhapkho' => 'ngay_nhapkho','ngay_laphoadon' => 'ngay_laphoadon','ngay_xacnhan' => 'ngay_xacnhan','lydo_nhap' => 'lydo_nhap','nguoi_giaohang' => 'nguoi_giaohang','so_chungtu' => 'so_chungtu','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','phieuxuat_id' => 'phieuxuat_id','nhacungcap_id' => 'nhacungcap_id','chuongtrinh_id' => 'chuongtrinh_id','soketoan_id' => 'soketoan_id','nhap_tu_kho_id' => 'nhap_tu_kho_id','nhap_vao_kho_id' => 'nhap_vao_kho_id','nguoi_lapphieu_id' => 'nguoi_lapphieu_id',],
'store_phieunhap_chitiet' => ['id' => 'id','ngay_sudungdautien' => 'ngay_sudungdautien','dongianhap' => 'dongianhap','soluongnhap' => 'soluongnhap','soluong_conlai' => 'soluong_conlai','thue' => 'thue','hansudung' => 'hansudung','so_lo' => 'so_lo','so_chungtu' => 'so_chungtu','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','nhapxuat_id' => 'nhapxuat_id','phieunhap_id' => 'phieunhap_id','soketoan_id' => 'soketoan_id','kho_id' => 'kho_id','sanpham_id' => 'sanpham_id','donvitinh_id' => 'donvitinh_id',],
'store_phieuxuat' => ['id' => 'id','so_phieuxuat' => 'so_phieuxuat','soketoan_id' => 'soketoan_id','xuat_tu_kho_id' => 'xuat_tu_kho_id','xuat_den_kho_id' => 'xuat_den_kho_id','nguoi_lapphieu_id' => 'nguoi_lapphieu_id','ngay_xuatkho' => 'ngay_xuatkho','ngay_xacnhan' => 'ngay_xacnhan','lydo_xuat' => 'lydo_xuat','nhacungcap_id' => 'nhacungcap_id','chuongtrinh_id' => 'chuongtrinh_id','nguoi_nhanhang' => 'nguoi_nhanhang','so_chungtu' => 'so_chungtu','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'store_phieuxuat_chitiet' => ['id' => 'id','ngay_sudungdautien' => 'ngay_sudungdautien','dongiaxuat' => 'dongiaxuat','soluongxuat' => 'soluongxuat','thue' => 'thue','hansudung' => 'hansudung','so_lo' => 'so_lo','so_chungtu' => 'so_chungtu','cotinhphi' => 'cotinhphi','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','nhapxuat_id' => 'nhapxuat_id','phieuxuat_id' => 'phieuxuat_id','soketoan_id' => 'soketoan_id','kho_id' => 'kho_id','sanpham_id' => 'sanpham_id','donvitinh_id' => 'donvitinh_id','phieunhap_chitiet_id' => 'phieunhap_chitiet_id',],
'store_sanpham' => ['id' => 'id','ma_sanpham' => 'ma_sanpham','ten_sanpham' => 'ten_sanpham','ten_hoatchat' => 'ten_hoatchat','nongdo_hamluong' => 'nongdo_hamluong','sokiemsoat' => 'sokiemsoat','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','nha_sanxuat_id' => 'nha_sanxuat_id','nuoc_sanxuat_id' => 'nuoc_sanxuat_id',],
'store_sanpham_loai' => ['id' => 'id','ma_loai_sanpham' => 'ma_loai_sanpham','ten_loai_sanpham' => 'ten_loai_sanpham','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'store_sanpham_nhom' => ['id' => 'id','ma_nhom_sanpham' => 'ma_nhom_sanpham','ten_nhom_sanpham' => 'ten_nhom_sanpham','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
'store_sanpham_nhom_loai_rel' => ['id' => 'id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','sanpham_id' => 'sanpham_id','sanpham_nhom_id' => 'sanpham_nhom_id','sanpham_loai_id' => 'sanpham_loai_id',],
'store_soketoan' => ['id' => 'id','ma_soketoan' => 'ma_soketoan','ngay_batdau' => 'ngay_batdau','ngay_ketthuc' => 'ngay_ketthuc','ngay_khoaso' => 'ngay_khoaso','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at','company_id' => 'company_id',],
'users' => ['id' => 'id','name' => 'name','email' => 'email','password' => 'password','fullname' => 'fullname','remember_token' => 'remember_token','created_at' => 'created_at','updated_at' => 'updated_at',],

];
