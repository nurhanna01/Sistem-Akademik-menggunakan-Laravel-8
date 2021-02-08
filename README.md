# Sistem-Informasi-Akademik-Sederhana-dengan-Laravel-8

Sistem Informasi Akademik
Sistem Informasi Akademik(simak) adalah sebuah web yang digunakan oleh pegawai akademik,admin, dan mahasiswa.
- Pegawai akademik akan menambahkan data admin,dosen,dan mahasiswa untuk akun awal yang nantinya data pribadi masing2 dapat diedit kembali oleh pihak yang bersangkutan.
- Admin dapat menambahkan data mata kuliah dan melihat mata kuliah yang diambil mahasiswa
- Mahasiswa dapat mengambil mata kuliah(sks)

# Fitur yang tersedia di Sistem Informasi Akademik
* Login Siswa dan dosen
* CRuD pegawai akademik oleh pegawai akademik
* CRUD Admin oleh pegawai akademik
* CRUD Mahasiswa oleh pegawai akademik
- CRUD Dosen oleh pegawai akademik
* CRUD Mata Kuliah/Courses oleh admin

- Menambahkan Courses/SKS oleh admin dengan hubugan anatara course dengan lecture menggunakan elequent one to many
* Menambah courses/SKS oleh Mahasiswa dengan elequent relasi many to many
* Dll


# Install
- Clone Repository
- git clone https://github.com/nurhanna01/Sistem-Informasi-Akademik-menggunakan-Laravel-8.git
- cd Sistem-Informasi-Akademik-menggunakan-Laravel-8
- composer install
- npm install
- Duplikat file .env.example, lalu rename menjadi .env
- Buka .env lalu ubah baris berikut sesuai dengan nama database yang akan dipakai
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

# Instalasi program/web
- php artisan key:generate
- php artisan migrate

- buka terminal jalankan -> php artisan serve
- jalankan di browser

# route
- pegawai akademik = /akademik
- admin = /admin
- mahasiswa = /student
- dosen = /lecture
