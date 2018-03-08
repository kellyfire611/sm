# Cách chạy dự án
## 1. Copy file .env.eample thành .env
```
copy .env.example .env
```
## 2. Thay đổi thông số kết nối DB 
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=store_manager
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Chạy câu lệnh khởi tạo DB + data
```
php artisan migrate --seed
```

## 4. Start server
```
php artisan serve
```

## 5. Truy cập Web
http://localhost:8000/admin
Tài khoản/password: admin/admin
