# Laravel Chat Realtime

## 0. Setup
Repositori ini dibangun dengan Laravel versi 6.02 ke atas.clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project. 

* masuk ke direktori laravel-chat
```bash
$ cd laravel-chat
```
* jalankan perintah composer install untuk mendownload direktori vendor
```bash
$ composer install
```
* buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example

* jalankan perintah php artisan key generate
```bash
$ php artisan key:generate
```

* Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. 

* Setelah itu lakukan migrate ke database
```bash
$ php artisan migrate
```
* Setelah itu kalian sudah bisa lanjut install npm 
```bash
$ npm install && npm run dev
```

* Setelah itu kalian sudah bisa lanjut install laravel echo 
```bash
$ npm install --save laravel-echo pusher-js
```

* Setelah itu kalian sudah bisa lanjut menjalankan npm run watch 
```bash
$ npm run watch
```

* Setelah itu kalian sudah bisa lanjut mennjalankan laravel server
```bash
$ php artisan serve
```
* Note*: dibagian ini teman-teman boleh isi sesuai API Key dari pusher,
jika ingin menggunakan ini boleh tapi sebagai demo saya ya teman-teman:

PUSHER_APP_ID=1054458
PUSHER_APP_KEY=60d25eee9e5168c2ac78
PUSHER_APP_SECRET=b164c9a4dcce12c58497
PUSHER_APP_CLUSTER=ap1

* kemudian ubah bagian ini menjadi pusher
BROADCAST_DRIVER=pusher