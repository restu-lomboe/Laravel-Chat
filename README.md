# Laravel Chat Realtime

## 0. Setup
Repositori ini dibangun dengan Laravel versi 6.02 ke atas. _Clone_ repositori ini, lalu lakukan langkah-langkah di bawah ini untuk menjalankan project. 

* Masuk ke direktori laravel-chat
```bash
$ cd laravel-chat
```

* Jalankan perintah berikut untuk mendownload _dependencies_ PHP yang dibutuhkan
```bash
$ composer install
```

* Jalankan perintah berikut untuk meng-_copy_ file _.env.example_ menjadi _.env_
```bash
$ cp .env.example .env
```

* Jalankan perintah berikut untuk mendapatkan _unique key_ aplikasi anda
```bash
$ php artisan key:generate
```

* Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama _database_, _username_ dan _password _nya di file _.env_ dengan database kalian
```bash
DB_DATABASE=NAMA_DATABASE_ANDA
DB_USERNAME=USERNAME_DATABASE_ANDA
DB_PASSWORD=PASSWORD_DATABASE_ANDA
```

* Setelah itu lakukan _migrate_ ke _database_
```bash
$ php artisan migrate:refresh
```

* Jalankan perintah berikut untuk mendownload _dependencies_ Node yang dibutuhkan 
```bash
$ npm install && npm run dev
```

* Setelah itu kalian sudah bisa lanjut install _laravel echo_ 
```bash
$ npm install --save laravel-echo pusher-js
```

* Setelah itu kalian sudah bisa lanjut menjalankan npm run watch 
```bash
$ npm run watch
```

## 1. Pusher
* Note: dibagian ini teman-teman boleh isi sesuai API Key dari pusher,
jika ingin menggunakan ini boleh tapi sebagai demo saja ya teman-teman:
```bash
PUSHER_APP_ID=1054458
PUSHER_APP_KEY=60d25eee9e5168c2ac78
PUSHER_APP_SECRET=b164c9a4dcce12c58497
PUSHER_APP_CLUSTER=ap1
```

* Edit kembali file _.env_ dan ubah _value_ berikut:
```bash
BROADCAST_DRIVER=pusher
```

## 2. Serve
* Setelah itu kalian sudah bisa lanjut menjalankan Laravel _serve_
```bash
$ php artisan serve
```
