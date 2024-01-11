# Aplikasi Slip Gaji Caffe

### Download Project

```bash
  git clone https://github.com/mhmmdarifrivai12/Penggajian-Dorts-Caffe.git
```

```bash
  cd Penggajian-Dorts-Caffe
```

-   Copy .env.example menjadi .env edit konfigurasi database dll

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

### Login

-   email = admin@admin.com
-   password = 123
