# Sistem-Informasi-Akademik-Sederhana-dengan-Laravel-8

Sistem Informasi Akademik
Sistem Informasi Akademik(simak) adalah sebuah web yang digunakan oleh pegawai akademik,admin, dan mahasiswa.
- Pegawai akademik akan menambahkan data admin,dosen,dan mahasiswa untuk akun awal yang nantinya data pribadi masing2 dapat diedit kembali oleh pihak yang bersangkutan.
- Admin dapat menambahkan data mata kuliah dan melihat mata kuliah yang diambil mahasiswa
- Mahasiswa dapat mengambil mata kuliah(sks)

# Fitur yang tersedia di Sistem Informasi Akademik
* Autentikasi Siswa
* CRD User pegawai akademik
* CRUD Admin
* CRUD Mahasiswa
* CRUD Mata Kuliah
* Menambah MK oleh Mahasiswa dengan elequent relasi many to many
* Dll


# Install
- Clone Repository
- git clone https://github.com/nurhanna01/Sistem-Informasi-Akademik-menggunakan-Laravel-8.git
- cd Sistem-Informasi-Akademik-Sederhana-dengan-Laravel-8
- composer install
- npm install
- cp .env.example .env
- Buka .env lalu ubah baris berikut sesuai dengan nama database yang akan dipakai
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

# Instalasi program/web
- php artisan key:generate
- php artisan migrate --seed

- buka terminal jalankan -> php artisan serve
- jalankan di browser

# route
- pegawai akademik = /akademik
- admin = /admin
- mahasiswa = /student
