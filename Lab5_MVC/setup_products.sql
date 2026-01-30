-- SQL Script to create products table and add sample data
-- Run this script in your database to set up the products table

-- Create products table if not exists
CREATE TABLE IF NOT EXISTS `products` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    `description` TEXT,
    `quantity` INT DEFAULT 0,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Clear existing products (optional - remove this line if you want to keep existing data)
-- DELETE FROM products;

-- Insert sample products
INSERT INTO `products` (`name`, `price`, `description`, `quantity`) VALUES
('Laptop Dell XPS 13', 25999000, 'Laptop cao cấp với bộ xử lý Intel Core i7, RAM 16GB, SSD 512GB', 15),
('iPhone 15 Pro Max', 32999000, 'Smartphone flagship Apple với camera 48MP, chip A17 Pro', 8),
('Samsung Galaxy S24', 22999000, 'Điện thoại Android flagship với màn hình AMOLED 120Hz', 12),
('iPad Air 2024', 15999000, 'Máy tính bảng Apple với M2 chip, màn hình Liquid Retina', 20),
('Sony WH-1000XM5', 9999000, 'Tai nghe chống ồn với pin 30 giờ, âm thanh vòm 360', 25),
('Apple Watch Series 9', 12999000, 'Đồng hồ thông minh Apple với sức khỏe và fitness', 18),
('AirPods Pro Gen 3', 6999000, 'Tai nghe true wireless với Adaptive Audio', 30),
('Google Pixel 8 Pro', 19999000, 'Smartphone Google với camera AI, màn hình OLED', 5),
('Microsoft Surface Laptop 6', 28999000, 'Laptop mỏng nhẹ Windows với ARM processor', 10),
('Canon EOS R8', 45999000, 'Máy ảnh mirrorless full-frame 24.2MP', 3),
('DJI Air 3S', 29999000, 'Drone 4K với thời gian bay 46 phút', 7),
('Nintendo Switch Pro', 8999000, 'Bộ điều khiển chuyên nghiệp cho Nintendo Switch', 40),
('Meta Quest 3', 13999000, 'Kính thực tế ảo VR/AR', 12),
('GoPro HERO 12 Black', 12999000, 'Camera hành động 5.3K với màn hình OLED', 22),
('Anker PowerBank 737', 1999000, 'Pin dự phòng 140W với cạnh USB-C', 0);

-- Display all products
SELECT * FROM `products`;
