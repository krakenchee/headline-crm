-- CRM4Retail Database Schema
-- Run this file to initialize the database

CREATE DATABASE IF NOT EXISTS crm4retail CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crm4retail;

-- Admin users table
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Demo requests (форма заявки на демо)
CREATE TABLE IF NOT EXISTS demo_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    city VARCHAR(100) NOT NULL,
    stores_count VARCHAR(50) NOT NULL,
    retail_profile VARCHAR(200) NOT NULL,
    status ENUM('new','in_progress','done','cancelled') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Pricing quiz requests (заявки на расчёт стоимости)
CREATE TABLE IF NOT EXISTS pricing_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    city VARCHAR(100) NOT NULL,
    stores_count VARCHAR(50) NOT NULL,
    retail_type VARCHAR(100) NOT NULL,
    employees_count VARCHAR(50),
    current_crm VARCHAR(150),
    budget VARCHAR(100),
    comment TEXT,
    status ENUM('new','in_progress','done','cancelled') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Callback requests (форма обратного звонка)
CREATE TABLE IF NOT EXISTS callback_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    status ENUM('new','called','missed') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin (login: admin, password: Admin1234!)
INSERT INTO admins (username, password_hash) VALUES 
('admin', '$2y$12$LQv3c1yqBWVHxkd0LHAkCOYz6TtxMQJqhN8YJ4BoVvhvVCKH9ZGSO')
ON DUPLICATE KEY UPDATE username=username;
-- Note: Change this password immediately after first login!
-- Default credentials: admin / Admin1234!
