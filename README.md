# EShowcase DTEO

**Platform Sistem Informasi Project Exhibition**
Departemen Teknik Elektro Otomasi (DTEO) - Fakultas Vokasi, Institut Teknologi Sepuluh Nopember (ITS).

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![React](https://img.shields.io/badge/React-18.x-61DAFB?style=flat-square&logo=react)](https://reactjs.org/)
[![Docker](https://img.shields.io/badge/Docker-Sail-2496ED?style=flat-square&logo=docker)](https://www.docker.com/)

EShowcase DTEO adalah platform web responsif yang dirancang untuk mengelola dan menampilkan portofolio proyek mahasiswa. Platform ini memfasilitasi pengunggahan media 2D (gambar) serta rendering model 3D interaktif secara langsung di dalam peramban web.

## Featured
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

## Setup

Ikuti langkah-langkah berikut untuk mengonfigurasi dan menjalankan *environment* pengembangan di komputer lokal Anda:

### 1. Kloning Repositori
```bash
git clone [https://github.com/RafiAchmadN/EShowcase-DTEO.git](https://github.com/RafiAchmadN/EShowcase-DTEO.git)
cd EShowcase-DTEO
```
2. Instalasi Dependensi Backend (Composer)
Gunakan image Docker sementara untuk menginstal dependensi PHP tanpa memerlukan PHP lokal:

```Bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
3. Konfigurasi Environment
Salin file konfigurasi environment dan sesuaikan jika diperlukan:

```Bash
cp .env.example .env
```
4. Menjalankan Docker Container
Inisialisasi container untuk Web Server, Database, dan layanan lainnya:

```Bash
./vendor/bin/sail up -d
```
5. Setup Aplikasi Laravel
Jalankan rangkaian perintah berikut untuk menyiapkan basis data dan penyimpanan:

```Bash
# Generate application key
./vendor/bin/sail artisan key:generate

# Menjalankan migrasi skema database
./vendor/bin/sail artisan migrate

# Membuat symlink untuk folder penyimpanan publik
./vendor/bin/sail artisan storage:link
```
6. Instalasi dan Kompilasi Frontend
Instal dependensi Node.js dan jalankan server pengembangan Vite:

```Bash
# Instalasi modul NPM
./vendor/bin/sail npm install --legacy-peer-deps

# Menjalankan Vite Hot-Module Replacement (HMR)
./vendor/bin/sail npm run dev
```
Aplikasi kini dapat diakses melalui peramban web pada alamat: http://localhost.
(Biarkan proses npm run dev tetap berjalan selama masa pengembangan).

## Menghentikan Layanan
Untuk mematikan seluruh container dan menghemat sumber daya sistem, jalankan perintah berikut pada terminal:

```Bash
./vendor/bin/sail down
```
## Troubleshooting
1. Port Conflict pada MySQL (Bind for 0.0.0.0:3306 failed)

Indikasi: Port default database (3306) telah digunakan oleh layanan lain di komputer host (misal: instalasi lokal MySQL/MariaDB).

Resolusi: Buka file .env, tambahkan variabel berikut di baris paling bawah, lalu restart Sail.

Cuplikan kode
```
FORWARD_DB_PORT=3307
```
Lalu jalankan ulang: 
```
./vendor/bin/sail down && ./vendor/bin/sail up -d
```
2. Antarmuka Tidak Termuat (Layar Putih / Tanpa CSS)

Indikasi: Server frontend Vite tidak berjalan atau mengalami crash.

Resolusi: Pastikan terminal yang mengeksekusi 
```
./vendor/bin/sail npm run dev 
```
tetap aktif dan tidak menampilkan pesan error kompilasi.
