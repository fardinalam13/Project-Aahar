CREATE DATABASE IF NOT EXISTS Aahar;

-- Use the Aahar database
USE Aahar;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone BIGINT(20) NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL,
    verify_token VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    verify_status TINYINT(2) DEFAULT 0 COMMENT '0=no, 1=yes' -- Add comments here
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create the vendors table
CREATE TABLE IF NOT EXISTS vendors (
    vendor_id INT PRIMARY KEY AUTO_INCREMENT,
    vendor_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone BIGINT(20) NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL,
    verify_token VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    verify_status TINYINT(2) DEFAULT 0 COMMENT '0=no, 1=yes' -- Add comments here
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Create bmi_data table with a foreign key constraint
CREATE TABLE IF NOT EXISTS bmi_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    height FLOAT NOT NULL,
    weight FLOAT NOT NULL,
    bmi FLOAT,
    advice VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create the food_items table
CREATE TABLE IF NOT EXISTS food_items  (
    item_id INT PRIMARY KEY AUTO_INCREMENT,
    item_name VARCHAR(60) NOT NULL,
    category VARCHAR(60) NOT NULL,
    calories FLOAT NOT NULL,
    item_price FLOAT NOT NULL,
    item_image VARCHAR(255) NOT NULL,
    vendor_id INT NOT NULL,
    FOREIGN KEY (vendor_id) REFERENCES vendors(vendor_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS contact (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone BIGINT(20) NOT NULL,
    message VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create the order table
CREATE TABLE IF NOT EXISTS orders  (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    order_date DATETIME NOT NULL,
    item_id INT NOT NULL,
    quantity FLOAT NOT NULL,
    total_price FLOAT NOT NULL,
    user_id INT NOT NULL,
    vendor_id INT NOT NULL,
    FOREIGN KEY (vendor_id) REFERENCES vendors(vendor_id),
    FOREIGN KEY (item_id) REFERENCES food_items(item_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS order_details  (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    item_id INT NOT NULL,
    quantity INT NOT NULL,
    total_price FLOAT NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    payment_status VARCHAR(50) DEFAULT 'unpaid',
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (item_id) REFERENCES food_items(item_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

