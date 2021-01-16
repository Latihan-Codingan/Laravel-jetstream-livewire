<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tutorial Github

## Download Aplikasi Melalui Github

1. Lakukan Clone Repository

```
git clone https://github.com/Latihan-Codingan/Laravel-livewire.git
```

2. Masuk ke directory

```
cd Laundry_Daily_Wash
```

### Jika Ada Perubahan File

1. Check Terlebih Dahulu File Apa Saja Yang Berubah

```
git status
```

2. Tambahkan Semua File Yang diubah

```
git add .
```

3. Lakukan Commit Jika Ada Perubahan

```
git commit -m "Komentar Anda"
```

4. Upload Ke Repository

```
git push origin master
```

## Jika Aplikasi Sudah Ada Dikomputer dan Mendownload Menggunakan git clone

1. Masuk Ke Folder Repository Yang Ada Di Komputer Anda
2. Mengambil Data Dari Repository

```
git pull origin master
```

# Tutorial Penggunaan Laravel

1. Install Composer Terlebih Dahulu <br>
   [Download disini](https://getcomposer.org/download/)

2. Install Node.Js<br>
    [Download Disini](https://nodejs.org/en/download/)

3. Install Package Composer

```
composer install
```

4. Install Package Node.Js

```
npm install
```

5. Copy isi file .env.example

```
cp .env.example .env
```

6. Generate Key Baru

```
php artisan key:generate
```

6. Buatlah database kosong di phpmyadmin dengan nama **db_latihan**
7. Kemudian Database Tersebut Atur Di File .env pada bagian DB_DATABASE
8. Lakukan Migrasi Database

```
php artisan migrate
```

9. Jalankan aplikasi Menggunakan 2 Console : 1 Untuk php artisan serve, 1 Untuk Npm Run Dev

```
php artisan serve
```

```
npm run dev
```
