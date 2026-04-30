<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# EShowcase DTEO

**Platform Sistem Informasi Project Exhibition**
Departemen Teknik Elektro Otomasi (DTEO) - Fakultas Vokasi, Institut Teknologi Sepuluh Nopember (ITS).

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![React](https://img.shields.io/badge/React-18.x-61DAFB?style=flat-square&logo=react)](https://reactjs.org/)
[![Docker](https://img.shields.io/badge/Docker-Sail-2496ED?style=flat-square&logo=docker)](https://www.docker.com/)

EShowcase DTEO adalah platform web responsif yang dirancang untuk mengelola dan menampilkan portofolio proyek mahasiswa. Platform ini memfasilitasi pengunggahan media 2D (gambar) serta rendering model 3D interaktif secara langsung di dalam peramban web.

## Fitur Utama
- **Manajemen Proyek:** Sistem CRUD (Create, Read, Update, Delete) untuk proyek mahasiswa.
- **Dukungan Media Ganda:** Pengunggahan *thumbnail* (2D) dan model objek (3D dengan format `.glb` / `.gltf`).
- **Interactive 3D Viewer:** Rendering model 3D menggunakan WebGL terintegrasi.
- **Desain Responsif:** Antarmuka modern yang dioptimalkan untuk berbagai ukuran layar menggunakan Tailwind CSS.
- **Environment Terisolasi:** Berjalan sepenuhnya di dalam *container* Docker untuk menjamin konsistensi di berbagai perangkat pengembang.

## Tech Stack
- **Backend:** Laravel 11, PHP 8.3
- **Frontend:** React.js, Inertia.js, Tailwind CSS
- **Database:** MySQL 8.0
- **DevOps:** Docker, Laravel Sail

---

## Prerequisites

Pastikan sistem Anda telah terinstal perangkat lunak berikut sebelum melakukan instalasi:
1. [Git](https://git-scm.com/)
2. [Docker Desktop](https://www.docker.com/products/docker-desktop) (Wajib menggunakan WSL2 untuk pengguna Windows)

---

## 🚀 Panduan Instalasi (Development Setup)

Ikuti langkah-langkah berikut untuk mengonfigurasi dan menjalankan *environment* pengembangan di komputer lokal Anda:

### 1. Kloning Repositori
```bash
git clone [https://github.com/RafiAchmadN/EShowcase-DTEO.git](https://github.com/RafiAchmadN/EShowcase-DTEO.git)
cd EShowcase-DTEO
```
2. Instalasi Dependensi Backend (Composer)
Karena folder vendor tidak diikutsertakan di GitHub, gunakan image Docker sementara ini untuk menginstal dependensi PHP (Laravel Sail) di awal:

```Bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
3. Konfigurasi Environment
Salin file .env.example untuk membuat file konfigurasi .env Anda sendiri. Biarkan pengaturan database bawaannya karena Docker sudah mengaturnya secara otomatis:

```Bash
cp .env.example .env
```
4. Menjalankan Docker Container
Nyalakan container untuk Web Server, PHP, dan MySQL di latar belakang:

```Bash
./vendor/bin/sail up -d
```

5. Setup Aplikasi (Key, Database, Storage)
Jalankan perintah Artisan berikut untuk menginisialisasi aplikasi Laravel Anda:

```Bash
# Membuat kunci keamanan aplikasi
./vendor/bin/sail artisan key:generate

# Menjalankan migrasi untuk membuat tabel database
./vendor/bin/sail artisan migrate

# Membuat symlink agar file/gambar/model 3D yang diunggah dapat diakses publik
./vendor/bin/sail artisan storage:link
```
6. Instalasi dan Kompilasi Frontend (React & Tailwind)
Instal dependensi Node.js dan jalankan server pengembangan (Vite) untuk merender tampilan antarmuka:

```Bash
# Instalasi library frontend
./vendor/bin/sail npm install --legacy-peer-deps

# Menjalankan Vite (Hot-Module Replacement)
./vendor/bin/sail npm run dev
```
🌐 Mengakses Aplikasi
Setelah seluruh langkah di atas berhasil dijalankan tanpa error, aplikasi dapat diakses melalui peramban web pada alamat:
http://localhost
>>>>>>> 254343bafce513e2b9fe795baefaaaad13a5527d
