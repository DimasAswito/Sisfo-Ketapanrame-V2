
# SISFO-KETAPANRAME-V2

*Empowering Tourism Through Seamless Digital Experiences*

![Last Commit](https://img.shields.io/github/last-commit/DimasAswito/SISFO-KETAPANRAME-V2?color=blue&label=last%20commit)
![CSS Percentage](https://img.shields.io/badge/css-46.7%25-blue)
![Languages](https://img.shields.io/github/languages/count/DimasAswito/SISFO-KETAPANRAME-V2)

---

## 🛠️ Built with the tools and technologies:

![JSON](https://img.shields.io/badge/-JSON-black?logo=json&logoColor=white)
![Markdown](https://img.shields.io/badge/-Markdown-000000?logo=markdown)
![npm](https://img.shields.io/badge/-npm-CB3837?logo=npm&logoColor=white)
![Jenkins](https://img.shields.io/badge/-Jenkins-D24939?logo=jenkins&logoColor=white)
![Composer](https://img.shields.io/badge/-Composer-885630?logo=composer&logoColor=white)
![JavaScript](https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=black)
![Docker](https://img.shields.io/badge/-Docker-2496ED?logo=docker&logoColor=white)
![XML](https://img.shields.io/badge/-XML-blueviolet?logo=xml&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)
![Vite](https://img.shields.io/badge/-Vite-646CFF?logo=vite&logoColor=white)
![Axios](https://img.shields.io/badge/-Axios-5A29E4?logo=axios&logoColor=white)

---

## 📌 Project Overview

SISFO-KETAPANRAME-V2 adalah sistem informasi digital yang mendukung promosi dan pengelolaan wisata secara modern. Platform ini mengintegrasikan berbagai layanan untuk memudahkan pengunjung dan pengelola dalam mengakses informasi pariwisata secara digital dan efisien.

---

## 🚀 Getting Started

### Prerequisites

Sebelum menjalankan proyek ini, pastikan kamu memiliki:

- **PHP** ≥ 8.1
- **Composer**
- **Node.js** dan **npm**
- **MySQL / MariaDB**
- (Opsional) **Docker & Docker Compose**

---

### 🛠️ Installation

Ikuti langkah-langkah berikut untuk mengatur proyek ini di lokal:

#### 1. Clone Repository
```bash
git clone https://github.com/username/SISFO-KETAPANRAME-V2.git
cd SISFO-KETAPANRAME-V2
```

#### 2. Install PHP Dependencies
```bash
composer install
```

#### 3. Install JavaScript Dependencies
```bash
npm install
```

#### 4. Setup Environment File
```bash
cp .env.example .env
php artisan key:generate
```
Ubah konfigurasi `.env` sesuai dengan database dan preferensimu.

#### 5. Jalankan Migrasi (jika ada)
```bash
php artisan migrate
```

#### 6. Jalankan Aplikasi
```bash
npm run dev
php artisan serve
```

> 💡 *Kamu bisa membuka aplikasi di* `http://127.0.0.1:8000`.

---

### 💡 Usage

- Login atau daftar sebagai pengelola/wisatawan
- Kelola data wisata, penginapan, tempat makan, dan layanan
- Cek statistik kunjungan dan laporan

---

### 🧪 Testing

Untuk menjalankan pengujian:

```bash
php artisan test
```

Atau dengan PHPUnit:

```bash
vendor/bin/phpunit
```

---

## ✨ Fitur Utama

- Pengelolaan data wisata, tempat makan & penginapan
- Dashboard responsif & interaktif
- API ready (untuk integrasi dengan sistem mobile)
- Manajemen user multi-level
- CI/CD integrasi dengan Jenkins
- Deployment container-ready dengan Docker

---

## 📄 Lisensi

MIT License © 2025 [Dimas Aswito]
