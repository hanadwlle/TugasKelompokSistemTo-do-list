CREATE DATABASE IF NOT EXISTS todo_db; -- Membuat database jika belum ada
USE todo_db; -- Menggunakan database todo_db

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID user (otomatis)
    name VARCHAR(100) NOT NULL, -- Nama user
    email VARCHAR(100) UNIQUE NOT NULL, -- Email (harus unik)
    password VARCHAR(255) NOT NULL, -- Password user
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Waktu pembuatan akun
);

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID tugas
    user_id INT NOT NULL, -- ID pemilik tugas
    title VARCHAR(150) NOT NULL, -- Judul tugas
    description TEXT, -- Deskripsi tugas
    due_date DATE, -- Tanggal jatuh tempo
    status ENUM('pending','done') DEFAULT 'pending', -- Status tugas
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Waktu dibuat
    CONSTRAINT fk_user FOREIGN KEY (user_id) -- Relasi ke tabel users
        REFERENCES users(id)
        ON DELETE CASCADE -- Jika user dihapus, tugas ikut terhapus
);
