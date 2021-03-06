<?php

use Illuminate\Database\Seeder;

class StoreSanphamNhomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();
        DB::table('store_sanpham_nhom')->insert(
            [
                [ 'id' => '1', 'ma_nhom_sanpham' => 'KS', 'ten_nhom_sanpham' => 'Kháng sinh', 'created_at' => $now],
                [ 'id' => '2', 'ma_nhom_sanpham' => 'DY', 'ten_nhom_sanpham' => 'Đông y', 'created_at' => $now],
                [ 'id' => '3', 'ma_nhom_sanpham' => 'TM', 'ten_nhom_sanpham' => 'Thuốc tim mạch khác', 'created_at' => $now],
                [ 'id' => '4', 'ma_nhom_sanpham' => 'GC', 'ten_nhom_sanpham' => 'Giãn cơ và ức chế cholinesterase', 'created_at' => $now],
                [ 'id' => '5', 'ma_nhom_sanpham' => 'HH', 'ten_nhom_sanpham' => 'Hô hấp', 'created_at' => $now],
                [ 'id' => '6', 'ma_nhom_sanpham' => 'SK', 'ten_nhom_sanpham' => 'Sản khoa', 'created_at' => $now],
                [ 'id' => '7', 'ma_nhom_sanpham' => 'GM', 'ten_nhom_sanpham' => 'Gây mê', 'created_at' => $now],
                [ 'id' => '8', 'ma_nhom_sanpham' => 'GĐ-HS', 'ten_nhom_sanpham' => 'Giảm đau - hạ sốt', 'created_at' => $now],
                [ 'id' => '9', 'ma_nhom_sanpham' => 'ĐĐ-CM', 'ten_nhom_sanpham' => 'Thuốc điều trị đau nửa đầu, chóng mặt', 'created_at' => $now],
                [ 'id' => '10', 'ma_nhom_sanpham' => 'DU', 'ten_nhom_sanpham' => 'Chống dị ứng', 'created_at' => $now],
                [ 'id' => '11', 'ma_nhom_sanpham' => 'AT', 'ten_nhom_sanpham' => 'An thần', 'created_at' => $now],
                [ 'id' => '12', 'ma_nhom_sanpham' => 'VR', 'ten_nhom_sanpham' => 'Kháng virus', 'created_at' => $now],
                [ 'id' => '13', 'ma_nhom_sanpham' => 'KN', 'ten_nhom_sanpham' => 'kháng nấm', 'created_at' => $now],
                [ 'id' => '14', 'ma_nhom_sanpham' => 'TT', 'ten_nhom_sanpham' => 'Thông thường', 'created_at' => $now],
                [ 'id' => '15', 'ma_nhom_sanpham' => 'TH', 'ten_nhom_sanpham' => 'Tiêu hóa', 'created_at' => $now],
                [ 'id' => '16', 'ma_nhom_sanpham' => 'NON', 'ten_nhom_sanpham' => 'Giảm đau hạ sốt chống viên không steroid', 'created_at' => $now],
                [ 'id' => '17', 'ma_nhom_sanpham' => 'GT', 'ten_nhom_sanpham' => 'Gây tê -mê', 'created_at' => $now],
                [ 'id' => '18', 'ma_nhom_sanpham' => 'G', 'ten_nhom_sanpham' => 'Trị gut', 'created_at' => $now],
                [ 'id' => '19', 'ma_nhom_sanpham' => 'THK', 'ten_nhom_sanpham' => 'Chống thoái hóa khớp', 'created_at' => $now],
                [ 'id' => '20', 'ma_nhom_sanpham' => 'ĐK', 'ten_nhom_sanpham' => 'Chống co giật ,chống động kinh', 'created_at' => $now],
                [ 'id' => '21', 'ma_nhom_sanpham' => 'GS', 'ten_nhom_sanpham' => 'Trị giun,sán', 'created_at' => $now],
                [ 'id' => '22', 'ma_nhom_sanpham' => 'RLTT', 'ten_nhom_sanpham' => 'Thuốc chống rối loạn tâm thần', 'created_at' => $now],
                [ 'id' => '23', 'ma_nhom_sanpham' => 'B', 'ten_nhom_sanpham' => 'Băng các loại', 'created_at' => $now],
                [ 'id' => '24', 'ma_nhom_sanpham' => 'GA', 'ten_nhom_sanpham' => 'Găng các loại', 'created_at' => $now],
                [ 'id' => '25', 'ma_nhom_sanpham' => 'OT', 'ten_nhom_sanpham' => 'Ống tiêm ', 'created_at' => $now],
                [ 'id' => '26', 'ma_nhom_sanpham' => 'CH', 'ten_nhom_sanpham' => 'Chỉ các loại', 'created_at' => $now],
                [ 'id' => '27', 'ma_nhom_sanpham' => 'BO', 'ten_nhom_sanpham' => 'Bột bó các loại', 'created_at' => $now],
                [ 'id' => '28', 'ma_nhom_sanpham' => 'DA', 'ten_nhom_sanpham' => 'Dây các loại', 'created_at' => $now],
                [ 'id' => '29', 'ma_nhom_sanpham' => 'GO', 'ten_nhom_sanpham' => 'Bông gòn các loai', 'created_at' => $now],
                [ 'id' => '30', 'ma_nhom_sanpham' => 'GAC', 'ten_nhom_sanpham' => 'Gạc các loai', 'created_at' => $now],
                [ 'id' => '31', 'ma_nhom_sanpham' => 'NO', 'ten_nhom_sanpham' => 'Nón', 'created_at' => $now],
                [ 'id' => '32', 'ma_nhom_sanpham' => 'KT', 'ten_nhom_sanpham' => 'Khẩu trang', 'created_at' => $now],
                [ 'id' => '33', 'ma_nhom_sanpham' => 'GIAY', 'ten_nhom_sanpham' => 'Giấy các loại', 'created_at' => $now],
                [ 'id' => '34', 'ma_nhom_sanpham' => 'KIM', 'ten_nhom_sanpham' => 'Kim các loại', 'created_at' => $now],
                [ 'id' => '35', 'ma_nhom_sanpham' => 'MASK', 'ten_nhom_sanpham' => 'Mask các loại', 'created_at' => $now],
                [ 'id' => '36', 'ma_nhom_sanpham' => 'HA', 'ten_nhom_sanpham' => 'Huyết áp các loại', 'created_at' => $now],
                [ 'id' => '37', 'ma_nhom_sanpham' => 'QUE', 'ten_nhom_sanpham' => 'Que các loại', 'created_at' => $now],
                [ 'id' => '38', 'ma_nhom_sanpham' => 'CON', 'ten_nhom_sanpham' => 'Cồn các loại', 'created_at' => $now],
                [ 'id' => '39', 'ma_nhom_sanpham' => 'TD', 'ten_nhom_sanpham' => 'Tạp dề', 'created_at' => $now],
                [ 'id' => '40', 'ma_nhom_sanpham' => 'NEP', 'ten_nhom_sanpham' => 'Nẹp các loại', 'created_at' => $now],
                [ 'id' => '41', 'ma_nhom_sanpham' => 'HOP', 'ten_nhom_sanpham' => 'Hộp các loại', 'created_at' => $now],
                [ 'id' => '42', 'ma_nhom_sanpham' => 'CONE', 'ten_nhom_sanpham' => 'Đầu cone các loại', 'created_at' => $now],
                [ 'id' => '43', 'ma_nhom_sanpham' => 'ON', 'ten_nhom_sanpham' => 'Ống nghiệm', 'created_at' => $now],
                [ 'id' => '44', 'ma_nhom_sanpham' => 'LO', 'ten_nhom_sanpham' => 'Lọ các loại', 'created_at' => $now],
                [ 'id' => '45', 'ma_nhom_sanpham' => 'DT', 'ten_nhom_sanpham' => 'Dịch truyền', 'created_at' => $now],
                [ 'id' => '46', 'ma_nhom_sanpham' => 'VTM', 'ten_nhom_sanpham' => 'Vitamin', 'created_at' => $now],
                [ 'id' => '47', 'ma_nhom_sanpham' => 'M', 'ten_nhom_sanpham' => 'Thuốc tác dụng đối vói máu', 'created_at' => $now],
                [ 'id' => '48', 'ma_nhom_sanpham' => 'NKQ', 'ten_nhom_sanpham' => 'Đặt nội khí quản', 'created_at' => $now],
                [ 'id' => '49', 'ma_nhom_sanpham' => 'N', 'ten_nhom_sanpham' => 'Nón', 'created_at' => $now],
                [ 'id' => '50', 'ma_nhom_sanpham' => 'SOND', 'ten_nhom_sanpham' => 'Sond các loại', 'created_at' => $now],
                [ 'id' => '51', 'ma_nhom_sanpham' => 'AIR', 'ten_nhom_sanpham' => 'Airway các số', 'created_at' => $now],
                [ 'id' => '52', 'ma_nhom_sanpham' => 'KHOA', 'ten_nhom_sanpham' => 'Khóa 3 chia các loại', 'created_at' => $now],
                [ 'id' => '53', 'ma_nhom_sanpham' => 'TNM', 'ten_nhom_sanpham' => 'Thuốc điều trị bệnh mắt', 'created_at' => $now],
                [ 'id' => '54', 'ma_nhom_sanpham' => 'TTM', 'ten_nhom_sanpham' => 'Thuốc tra mắt', 'created_at' => $now],
                [ 'id' => '55', 'ma_nhom_sanpham' => 'KEP', 'ten_nhom_sanpham' => 'Kẹp các loại', 'created_at' => $now],
                [ 'id' => '56', 'ma_nhom_sanpham' => 'DOA', 'ten_nhom_sanpham' => 'Dao các số', 'created_at' => $now],
                [ 'id' => '57', 'ma_nhom_sanpham' => 'THĐH', 'ten_nhom_sanpham' => 'Insulin và nhóm thuốc hạ đường huyết', 'created_at' => $now],
                [ 'id' => '58', 'ma_nhom_sanpham' => 'DL', 'ten_nhom_sanpham' => 'Đè lưỡi các loại', 'created_at' => $now],
                [ 'id' => '59', 'ma_nhom_sanpham' => 'D-G', 'ten_nhom_sanpham' => 'Điện cực - giấy các loại', 'created_at' => $now],
                [ 'id' => '60', 'ma_nhom_sanpham' => 'TUI', 'ten_nhom_sanpham' => 'Túi các loại', 'created_at' => $now],
                [ 'id' => '61', 'ma_nhom_sanpham' => 'XK', 'ten_nhom_sanpham' => 'Nhóm xác khuẩn', 'created_at' => $now],
                [ 'id' => '62', 'ma_nhom_sanpham' => 'XN', 'ten_nhom_sanpham' => 'Xét nghiệm', 'created_at' => $now],
                [ 'id' => '63', 'ma_nhom_sanpham' => 'URG', 'ten_nhom_sanpham' => 'Urgo các số', 'created_at' => $now],
                [ 'id' => '64', 'ma_nhom_sanpham' => 'DINH', 'ten_nhom_sanpham' => 'Đinh các số', 'created_at' => $now],
                [ 'id' => '65', 'ma_nhom_sanpham' => 'DAI', 'ten_nhom_sanpham' => 'Đai các loại', 'created_at' => $now],
                [ 'id' => '66', 'ma_nhom_sanpham' => 'PHIM', 'ten_nhom_sanpham' => 'Phim X -Quang', 'created_at' => $now],
                [ 'id' => '67', 'ma_nhom_sanpham' => 'GEL', 'ten_nhom_sanpham' => 'Gel các loại', 'created_at' => $now],
                [ 'id' => '68', 'ma_nhom_sanpham' => 'KEP-KEO', 'ten_nhom_sanpham' => 'Kẹp - kéo- pen', 'created_at' => $now],
                [ 'id' => '69', 'ma_nhom_sanpham' => 'GN', 'ten_nhom_sanpham' => 'Gây nghiện', 'created_at' => $now],
                [ 'id' => '70', 'ma_nhom_sanpham' => 'HTT', 'ten_nhom_sanpham' => 'Hướng tâm thần', 'created_at' => $now],
                [ 'id' => '71', 'ma_nhom_sanpham' => 'INSU', 'ten_nhom_sanpham' => 'Insulin và nhóm thuốc hạ đường huyết', 'created_at' => $now],
                [ 'id' => '72', 'ma_nhom_sanpham' => 'LT', 'ten_nhom_sanpham' => 'Lợi tiểu', 'created_at' => $now],
                [ 'id' => '73', 'ma_nhom_sanpham' => 'GD', 'ten_nhom_sanpham' => 'Giải độc và các thuốc dùng trong trường hợp ngộ độc', 'created_at' => $now],
                [ 'id' => '74', 'ma_nhom_sanpham' => 'TP', 'ten_nhom_sanpham' => 'Thuốc phiến', 'created_at' => $now],
                [ 'id' => '75', 'ma_nhom_sanpham' => 'DN', 'ten_nhom_sanpham' => 'Dùng ngoài', 'created_at' => $now],
                [ 'id' => '76', 'ma_nhom_sanpham' => 'P', 'ten_nhom_sanpham' => 'Phát tán phong hàn', 'created_at' => $now],
                [ 'id' => '77', 'ma_nhom_sanpham' => 'T', 'ten_nhom_sanpham' => 'Phát tán phong thấp', 'created_at' => $now],
                [ 'id' => '78', 'ma_nhom_sanpham' => 'H', 'ten_nhom_sanpham' => 'Trừ hàn', 'created_at' => $now],
                [ 'id' => '79', 'ma_nhom_sanpham' => 'Q', 'ten_nhom_sanpham' => 'trừ hàn', 'created_at' => $now],
                [ 'id' => '80', 'ma_nhom_sanpham' => 'W', 'ten_nhom_sanpham' => 'Dương cứu nghịch', 'created_at' => $now],
                [ 'id' => '81', 'ma_nhom_sanpham' => 'E', 'ten_nhom_sanpham' => 'Phát tán phong nhiệt', 'created_at' => $now],
                [ 'id' => '82', 'ma_nhom_sanpham' => 'R', 'ten_nhom_sanpham' => 'Thanh nhiệt giải thử', 'created_at' => $now],
                [ 'id' => '83', 'ma_nhom_sanpham' => 'U', 'ten_nhom_sanpham' => 'Thanh nhiệt giải độc', 'created_at' => $now],
                [ 'id' => '84', 'ma_nhom_sanpham' => 'Y', 'ten_nhom_sanpham' => 'Thanh nhiệt tả hỏa', 'created_at' => $now],
                [ 'id' => '85', 'ma_nhom_sanpham' => 'I', 'ten_nhom_sanpham' => 'Thanh nhiệt táo tháp', 'created_at' => $now],
                [ 'id' => '86', 'ma_nhom_sanpham' => 'O', 'ten_nhom_sanpham' => 'Thanh nhiệt lương huyết', 'created_at' => $now],
                [ 'id' => '87', 'ma_nhom_sanpham' => 'A', 'ten_nhom_sanpham' => 'Trừ đàm', 'created_at' => $now],
                [ 'id' => '88', 'ma_nhom_sanpham' => 'S', 'ten_nhom_sanpham' => 'Chỉ ho bình suyễn', 'created_at' => $now],
                [ 'id' => '89', 'ma_nhom_sanpham' => 'D', 'ten_nhom_sanpham' => 'Bình can Tức phong', 'created_at' => $now],
                [ 'id' => '90', 'ma_nhom_sanpham' => 'F', 'ten_nhom_sanpham' => 'An thần', 'created_at' => $now],
                [ 'id' => '91', 'ma_nhom_sanpham' => 'J', 'ten_nhom_sanpham' => 'khai khiếu', 'created_at' => $now],
                [ 'id' => '92', 'ma_nhom_sanpham' => 'K', 'ten_nhom_sanpham' => 'Lý khí', 'created_at' => $now],
                [ 'id' => '93', 'ma_nhom_sanpham' => 'L', 'ten_nhom_sanpham' => 'Hoạt huyết, khứ ứ', 'created_at' => $now],
                [ 'id' => '94', 'ma_nhom_sanpham' => 'Z', 'ten_nhom_sanpham' => 'Chỉ huyết', 'created_at' => $now],
                [ 'id' => '95', 'ma_nhom_sanpham' => 'X', 'ten_nhom_sanpham' => 'Trừ thấp lợi thủy', 'created_at' => $now],
                [ 'id' => '96', 'ma_nhom_sanpham' => 'C', 'ten_nhom_sanpham' => 'Trục thủy', 'created_at' => $now],
                [ 'id' => '97', 'ma_nhom_sanpham' => 'V', 'ten_nhom_sanpham' => 'Tả hạ nhu nhuận', 'created_at' => $now],
                [ 'id' => '98', 'ma_nhom_sanpham' => 'QW', 'ten_nhom_sanpham' => 'Hóa thấp tiêu đạo', 'created_at' => $now],
                [ 'id' => '99', 'ma_nhom_sanpham' => 'QE', 'ten_nhom_sanpham' => 'Thu liễm, cố sáp', 'created_at' => $now],
                [ 'id' => '100', 'ma_nhom_sanpham' => 'QR', 'ten_nhom_sanpham' => 'An thai', 'created_at' => $now],
                [ 'id' => '101', 'ma_nhom_sanpham' => 'QT', 'ten_nhom_sanpham' => 'Bổ âm, bổ huyết', 'created_at' => $now],
                [ 'id' => '102', 'ma_nhom_sanpham' => 'QY', 'ten_nhom_sanpham' => 'Bổ dương, bổ khí', 'created_at' => $now],
                [ 'id' => '103', 'ma_nhom_sanpham' => 'NT', 'ten_nhom_sanpham' => 'Nội tiết', 'created_at' => $now],
                [ 'id' => '104', 'ma_nhom_sanpham' => 'TY', 'ten_nhom_sanpham' => 'Thanh nhiệt táo thấp', 'created_at' => $now],
                [ 'id' => '105', 'ma_nhom_sanpham' => 'CT', 'ten_nhom_sanpham' => 'Thuốc chống co thắt', 'created_at' => $now],
                [ 'id' => '106', 'ma_nhom_sanpham' => 'CD', 'ten_nhom_sanpham' => 'Thuốc chống dịch', 'created_at' => $now],
                [ 'id' => '107', 'ma_nhom_sanpham' => 'TR', 'ten_nhom_sanpham' => 'Thuốc điều trị trĩ', 'created_at' => $now],
                [ 'id' => '108', 'ma_nhom_sanpham' => 'HM', 'ten_nhom_sanpham' => 'Hocmon thượng thận và các chất tổng hợp thay thế', 'created_at' => $now],
                [ 'id' => '109', 'ma_nhom_sanpham' => 'TDCM', 'ten_nhom_sanpham' => 'Thuốc thúc đẻ và cầm máu sau đẻ', 'created_at' => $now],
                [ 'id' => '110', 'ma_nhom_sanpham' => 'CDN', 'ten_nhom_sanpham' => 'Thuốc chống đẻ non', 'created_at' => $now],
                [ 'id' => '111', 'ma_nhom_sanpham' => 'THA', 'ten_nhom_sanpham' => 'Thuốc điều trị tăng huyết áp', 'created_at' => $now],
                [ 'id' => '112', 'ma_nhom_sanpham' => 'TAN', 'ten_nhom_sanpham' => 'Tân dược', 'created_at' => $now],
                [ 'id' => '113', 'ma_nhom_sanpham' => 'BB', 'ten_nhom_sanpham' => 'Bông băng', 'created_at' => $now],
                [ 'id' => '114', 'ma_nhom_sanpham' => 'YCU', 'ten_nhom_sanpham' => 'Y dụng cụ', 'created_at' => $now],
                [ 'id' => '115', 'ma_nhom_sanpham' => 'DTD', 'ten_nhom_sanpham' => 'Dịch truyền đạm', 'created_at' => $now],
                [ 'id' => '116', 'ma_nhom_sanpham' => 'DTDG', 'ten_nhom_sanpham' => 'Dịch truyền điện giải', 'created_at' => $now],
                [ 'id' => '117', 'ma_nhom_sanpham' => 'DTCPT', 'ten_nhom_sanpham' => 'Dịch truyền cao phân tử', 'created_at' => $now],
                [ 'id' => '118', 'ma_nhom_sanpham' => 'TTTK', 'ten_nhom_sanpham' => 'Thuốc tiêm truyền khác', 'created_at' => $now],
                [ 'id' => '119', 'ma_nhom_sanpham' => 'TT-SK', 'ten_nhom_sanpham' => 'Thuốc tẩy trùng sát khuẩn', 'created_at' => $now],
                [ 'id' => '120', 'ma_nhom_sanpham' => 'XQ', 'ten_nhom_sanpham' => 'X-Quang', 'created_at' => $now],
                [ 'id' => '121', 'ma_nhom_sanpham' => 'LN', 'ten_nhom_sanpham' => 'thuốc chống loạn nhịp', 'created_at' => $now],
                [ 'id' => '122', 'ma_nhom_sanpham' => 'ĐTN', 'ten_nhom_sanpham' => 'Thuốc chống đau thắt ngực', 'created_at' => $now],
                [ 'id' => '123', 'ma_nhom_sanpham' => 'ST', 'ten_nhom_sanpham' => 'thuốc điều trị suy tim', 'created_at' => $now],
                [ 'id' => '124', 'ma_nhom_sanpham' => 'HK', 'ten_nhom_sanpham' => 'Thuốc chống huyết khối', 'created_at' => $now],
                [ 'id' => '125', 'ma_nhom_sanpham' => 'HLP', 'ten_nhom_sanpham' => 'Thuốc hạ lipid máu', 'created_at' => $now],
                [ 'id' => '126', 'ma_nhom_sanpham' => 'CN', 'ten_nhom_sanpham' => 'Thuốc chống nôn', 'created_at' => $now],
                [ 'id' => '127', 'ma_nhom_sanpham' => 'KAC', 'ten_nhom_sanpham' => 'Thuốc kháng acid và các thuốc chống loét khác tác dụng trên đường tiêu hóa', 'created_at' => $now],
                [ 'id' => '128', 'ma_nhom_sanpham' => 'TNT', 'ten_nhom_sanpham' => 'Thuốc tẩy và nhuận tràng', 'created_at' => $now],
                [ 'id' => '129', 'ma_nhom_sanpham' => 'TC', 'ten_nhom_sanpham' => 'Thuốc điều trị tiêu chảy', 'created_at' => $now],
                [ 'id' => '130', 'ma_nhom_sanpham' => 'ĐTH', 'ten_nhom_sanpham' => 'Thuốc đường tiêu hóa khác', 'created_at' => $now],
                [ 'id' => '131', 'ma_nhom_sanpham' => 'KC', 'ten_nhom_sanpham' => 'Khoáng chất', 'created_at' => $now],
                [ 'id' => '132', 'ma_nhom_sanpham' => 'ĐCN', 'ten_nhom_sanpham' => 'Thuốc uống điều chỉnh nước, điện giải và cân bằng acid-bazo', 'created_at' => $now],
                [ 'id' => '133', 'ma_nhom_sanpham' => 'OXY', 'ten_nhom_sanpham' => 'Oxy thở', 'created_at' => $now],
                [ 'id' => '134', 'ma_nhom_sanpham' => 'MAU', 'ten_nhom_sanpham' => 'Máu', 'created_at' => $now],
                [ 'id' => '135', 'ma_nhom_sanpham' => 'COR', 'ten_nhom_sanpham' => 'Corticoid', 'created_at' => $now],
                [ 'id' => '136', 'ma_nhom_sanpham' => 'TN', 'ten_nhom_sanpham' => 'Tiết niệu', 'created_at' => $now],
                [ 'id' => '137', 'ma_nhom_sanpham' => 'CDU', 'ten_nhom_sanpham' => ' THUỐC CHỐNG DỊ ỨNG VÀ DÙNG TRONG CÁC TRƯỜNG HỢP QUÁ MẪN  ', 'created_at' => $now],
                [ 'id' => '138', 'ma_nhom_sanpham' => 'RHM', 'ten_nhom_sanpham' => 'Răng hàm mặt', 'created_at' => $now],
                [ 'id' => '139', 'ma_nhom_sanpham' => 'TMH', 'ten_nhom_sanpham' => 'Thuốc tai- mũi- họng', 'created_at' => $now],
            ]
        );

        DB::statement('ALTER TABLE `store_sanpham_nhom` AUTO_INCREMENT=1;');
    }
}
