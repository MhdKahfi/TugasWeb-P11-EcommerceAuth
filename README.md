# Tugas Rutin 11 - E-Commerce DB + Secure Auth

Proyek ini dibuat untuk memenuhi Tugas Rutin Pertemuan 11, mencakup pembuatan struktur database E-Commerce, relasi Eloquent, autentikasi aman, manajemen role, hingga panel admin (bonus).

## 🚀 Fitur Utama

### Bagian A — Database & Eloquent
- **Migrations:** 7 tabel e-commerce (Categories, Products, Addresses, Orders, OrderItems, Payments, Reviews) dengan Foreign Key constraints.
- **Models & Relationships:** Relasi antar tabel (One-to-Many, BelongsTo) dan Local Scopes (`inStock`, `cheaperThan`).
- **Seeders & Factories:** Menghasilkan 10 Kategori, 60 Produk realistis, dan User default (Admin & User Biasa).
- **Dokumentasi Query:** 5 Query Tinker untuk demonstrasi Scope dan Eager Loading.

### Bagian B — Auth & Security
- **Laravel Breeze:** Fitur Login, Register, dan Logout.
- **Multi-Role:** Role Admin, Editor, dan User dengan Custom Middleware (`RoleMiddleware`).
- **Post Policy:** Otorisasi edit/delete hanya untuk pemilik post (Admin bypass).
- **Route Protection:** Proteksi halaman admin berdasarkan role.

### ⭐ Bonus
- **Filament Admin Panel:** Dashboard admin untuk mengelola data produk dengan demonstrasi Eager Loading.

## 🛠️ Teknologi yang Digunakan
- **Framework:** Laravel 11
- **Database:** MySQL
- **Frontend:** Blade, Tailwind CSS, Vite
- **Auth:** Laravel Breeze
- **Admin Panel:** Filament v3

## 📋 Prasyarat (Prerequisites)
Pastikan laptop Anda sudah terinstall:
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL (XAMPP / Laragon / DBMS lainnya)

## ⚙️ Cara Instalasi (Pertama Kali)

1. **Clone repositori ini** (atau ekstrak folder proyek):
   ```bash
   git clone <url-repo-anda>
   cd Tugasweb-P11-EcommerceAuth