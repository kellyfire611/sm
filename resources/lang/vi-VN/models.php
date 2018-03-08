<?php

return [

    'common' => [
        'created_at' => 'Ngày khởi tạo',
        'updated_at' => 'Ngày cập nhật',
        'deleted_at' => 'Ngày xóa',
        'enable'     => 'Đồng ý',
        'disable'    => 'Không'
    ],

    'admin_config' => ['id' => 'id','name' => 'name','value' => 'value','description' => 'description','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_menu' => ['id' => 'id','parent_id' => 'parent_id','order' => 'order','title' => 'title','icon' => 'icon','uri' => 'uri','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_operation_log' => ['id' => 'id','user_id' => 'user_id','path' => 'path','method' => 'method','ip' => 'ip','input' => 'input','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_permissions' => ['id' => 'id','name' => 'name','slug' => 'slug','http_method' => 'http_method','http_path' => 'http_path','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_roles' => ['id' => 'id','name' => 'name','slug' => 'slug','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_role_menu' => ['role_id' => 'role_id','menu_id' => 'menu_id','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_role_permissions' => ['role_id' => 'role_id','permission_id' => 'permission_id','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_role_users' => ['role_id' => 'role_id','user_id' => 'user_id','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_users' => ['id' => 'id','username' => 'username','password' => 'password','name' => 'name','avatar' => 'avatar','remember_token' => 'remember_token','created_at' => 'created_at','updated_at' => 'updated_at',],
    'admin_user_permissions' => ['user_id' => 'user_id','permission_id' => 'permission_id','created_at' => 'created_at','updated_at' => 'updated_at',],
    'hrm_noichon_rel' => ['id' => 'id','quocgia_id' => 'Quốc gia','tinhthanh_id' => 'Tỉnh thành','quanhuyen_id' => 'Quận huyện','xaphuong_id' => 'Xã phường','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'hrm_quanhuyen' => ['id' => 'id','ma_quanhuyen' => 'Mã quận huyện','ten_quanhuyen' => 'Tên quận huyện','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'hrm_quocgia' => ['id' => 'id','ma_quocgia' => 'Mã quốc gia','ten_quocgia' => 'Tên quốc gia','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'hrm_tinhthanh' => ['id' => 'id','ma_tinhthanh' => 'Mã tỉnh thành','ten_tinhthanh' => 'Tên tỉnh thành','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'hrm_xaphuong' => ['id' => 'id','ma_xaphuong' => 'Mã xã phường','ten_xaphuong' => 'Tên xã phường','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'migrations' => ['id' => 'id','migration' => 'migration','batch' => 'batch',],
    'password_resets' => ['email' => 'email','token' => 'token','created_at' => 'created_at',],
    'store_donvitinh' => ['id' => 'id','ma_donvitinh' => 'Mã đơn vị tính','ten_donvitinh' => 'Tên đơn vị tính','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_kho' => ['id' => 'id','ma_kho' => 'Mã kho','ten_kho' => 'Tên kho','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_kho_loai' => ['id' => 'id','ma_loai_kho' => 'ma_loai_kho','ten_loai_kho' => 'Tên loại kho','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_kho_loai_rel' => ['id' => 'id','kho_id' => 'Kho','kho_loai_id' => 'Loại kho','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_kho_nhapxuat_rel' => ['id' => 'id','tu_kho_id' => 'Từ kho','den_kho_id' => 'Đến kho','nhapxuat_id' => 'Nhập xuất','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_nguoncungcap' => ['id' => 'id','ma_nguoncungcap' => 'Mã nguồn cung cấp','ten_nguoncungcap' => 'Tên nguồn cung cấp','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_nhacungcap' => ['id' => 'id','ma_nhacungcap' => 'Mã nhà cung cấp','ten_nhacungcap' => 'Tên nhà cung cấp','diachi_nhacungcap' => 'Địa chỉ nhà cung cấp','sodienthoai_nhacungcap' => 'Số điện thoại nhà cung cấp','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_nhapxuat' => ['id' => 'id','ma_nhapxuat' => 'Mã nhập xuất','ten_nhapxuat' => 'Tên nhập xuất','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_nhapxuat_loai' => ['id' => 'id','ma_loai_nhapxuat' => 'Mã loại nhập xuất','ten_loai_nhapxuat' => 'Tên loại nhập xuất','la_nhap' => 'Là nhập','la_noibo' => 'Là nội bộ','la_hoantra' => 'Là hoàn trả','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_nhapxuat_loai_rel' => ['id' => 'id','nhapxuat_id' => 'Nhập xuất','nhapxuat_loai_id' => 'Loại nhập xuất','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_phieunhap' => ['id' => 'id','so_phieunhap' => 'Số phiếu nhập','ngay_nhapkho' => 'Ngày nhập kho','ngay_laphoadon' => 'Ngày lập hóa đơn','ngay_xacnhan' => 'Ngày xác nhận','lydo_nhap' => 'Lý do nhập','nguoi_giaohang' => 'Người giao hàng','so_chungtu' => 'Số chứng từ','phieuxuat_id' => 'Phiếu xuất','nhacungcap_id' => 'Nhà cung cấp','chuongtrinh_id' => 'Chương trình','soketoan_id' => 'Sổ kế toán','nhap_tu_kho_id' => 'Nhập từ kho','nhap_vao_kho_id' => 'Nhập vào kho','nguoi_lapphieu_id' => 'Người lập phiếu','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_phieunhap_chitiet' => ['id' => 'id','ngay_sudungdautien' => 'Ngày sử dụng đầu tiên','dongianhap' => 'Đơn giá nhập','soluongnhap' => 'Số lượng nhập','soluong_conlai' => 'Số lượng còn lại','thue' => 'Thuế','hansudung' => 'Hạn sử dụng','so_lo' => 'Số lô','so_chungtu' => 'Số chứng từ','nhapxuat_id' => 'Nhập xuất','phieunhap_id' => 'Phiếu nhập','soketoan_id' => 'Sổ kế toán','kho_id' => 'Nhập vào kho','sanpham_id' => 'Sản phẩm','donvitinh_id' => 'Đơn vị tính','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_phieuxuat' => ['id' => 'id','so_phieuxuat' => 'Số phiếu xuất','soketoan_id' => 'Sổ kế toán','xuat_tu_kho_id' => 'Xuất từ kho','xuat_den_kho_id' => 'Xuất đến kho','nguoi_lapphieu_id' => 'Người lập phiếu','ngay_xuatkho' => 'Ngày xuất kho','ngay_xacnhan' => 'Ngày xác nhận','lydo_xuat' => 'Lý do xuất','nhacungcap_id' => 'Nhà cung cấp','chuongtrinh_id' => 'Chương trình','nguoi_nhanhang' => 'Người nhận hàng','so_chungtu' => 'Số chứng từ','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_phieuxuat_chitiet' => ['id' => 'id','ngay_sudungdautien' => 'Ngày sử dụng đầu tiên','dongiaxuat' => 'Đơn giá xuất','soluongxuat' => 'Số lượng xuất','thue' => 'Thuế','hansudung' => 'Hạn sử dụng','so_lo' => 'Số lô','so_chungtu' => 'Số chứng từ','cotinhphi' => 'Có tính phí','nhapxuat_id' => 'Nhập xuất','phieuxuat_id' => 'Phiếu xuất','soketoan_id' => 'Sổ kế toán','kho_id' => 'Xuất từ kho','sanpham_id' => 'Sản phẩm','donvitinh_id' => 'Đơn vị tính','phieunhap_chitiet_id' => 'Phiếu nhập chi tiết','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_sanpham' => ['id' => 'id','ma_sanpham' => 'Mã sản phẩm','ten_sanpham' => 'Tên sản phẩm','ten_hoatchat' => 'Tên hoạt chất','nongdo_hamluong' => 'Nồng độ hàm lượng','sokiemsoat' => 'Số kiểm soát','nha_sanxuat_id' => 'Nhà sản xuất','nuoc_sanxuat_id' => 'Nước sản xuất','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_sanpham_loai' => ['id' => 'id','ma_loai_sanpham' => 'Mã loại sản phẩm','ten_loai_sanpham' => 'Tên loại sản phẩm','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_sanpham_nhom' => ['id' => 'id','ma_nhom_sanpham' => 'Mã nhóm sản phẩm','ten_nhom_sanpham' => 'Tên nhóm sản phẩm','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_sanpham_nhom_loai_rel' => ['id' => 'id','sanpham_id' => 'Sản phẩm','sanpham_nhom_id' => 'Nhóm sản phẩm','sanpham_loai_id' => 'Loại sản phẩm','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'store_soketoan' => ['id' => 'id','ma_soketoan' => 'Mã sổ kế toán','ngay_batdau' => 'Ngày bắt đầu Sổ kế toán','ngay_ketthuc' => 'Ngày kết thúc Sổ kế toán','ngay_khoaso' => 'Ngày khóa Sổ kế toán','company_id' => 'company_id','deleted_at' => 'deleted_at','created_at' => 'created_at','updated_at' => 'updated_at',],
    'users' => ['id' => 'ID','name' => 'Tên','email' => 'Email','password' => 'Mật khẩu','remember_token' => 'remember_token','created_at' => 'created_at','updated_at' => 'updated_at',],


];
