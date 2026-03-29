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
