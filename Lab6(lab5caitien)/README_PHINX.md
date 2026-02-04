# Hướng dẫn sử dụng Phinx với XAMPP

## Yêu cầu
- XAMPP đã cài đặt và chạy MySQL
- Composer đã cài đặt
- PHP >= 7.2

## Cài đặt khi pull code về

### Bước 1: Cài đặt dependencies
```bash
cd c:\xampp\htdocs\buoi2_php\Lab6(lab5caitien)
composer install
```

### Bước 2: Cấu hình database
Mở file `phinx.php` và cập nhật thông tin database:
```php
'name' => 'lab5_mvc',  // Tên database của bạn
'user' => 'root',       // Username
'pass' => '',           // Password
```

### Bước 3: Tạo database
Mở phpMyAdmin hoặc MySQL client và tạo database:
```sql
CREATE DATABASE lab5_mvc;
```

### Bước 4: Chạy migrations (tạo bảng)
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" migrate
```

### Bước 5: Chạy seeders (thêm dữ liệu mẫu)
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" seed:run
```

## Các lệnh Phinx thường dùng

### Tạo migration mới
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" create TenMigration
```

### Chạy migrations
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" migrate
```

### Rollback migration (hoàn tác)
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" rollback
```

### Tạo seeder mới
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" seed:create TenSeeder
```

### Chạy seeders
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" seed:run
```

### Chạy seeder cụ thể
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" seed:run -s StudentsSeeder
```

### Kiểm tra trạng thái
```bash
php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" status
```

## Cấu trúc thư mục

```
Lab6(lab5caitien)/
├── db/
│   ├── migrations/      # Chứa các file migration
│   └── seeds/           # Chứa các file seeder
├── phinx.php           # File cấu hình Phinx
└── composer.json
```

## Lưu ý

1. **Khi pull code về lần đầu**, chỉ cần chạy:
   ```bash
   composer install
   php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" migrate
   php "c:\xampp\htdocs\buoi2_php\vendor\bin\phinx" seed:run
   ```

2. **Không commit** file database vào Git, chỉ commit migrations và seeders

3. **Mỗi khi có thay đổi cấu trúc bảng**, tạo migration mới thay vì sửa trực tiếp database

4. **Migrations tự động tạo bảng `phinxlog`** để theo dõi phiên bản đã chạy

## Ví dụ workflow

### Khi thêm member mới vào team:
1. Member clone code về
2. Chạy `composer install`
3. Tạo database trong phpMyAdmin
4. Chạy `phinx migrate` để tạo bảng
5. Chạy `phinx seed:run` để có data mẫu
6. Bắt đầu code!

### Khi cần thêm cột mới vào bảng:
1. Tạo migration: `phinx create AddColumnToTable`
2. Viết code trong migration
3. Chạy: `phinx migrate`
4. Commit file migration vào Git
5. Các member khác chỉ cần `git pull` và `phinx migrate`
