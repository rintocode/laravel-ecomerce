Melalui terminal, cd ke direktori laravel-ecommerce.

(Sesuai petunjuk installasi) Pada terminal, berikan perintah <b>composer install</b>. Ini yang perlu koneksi internet.

Composer akan menginstall dependency paket dari source code tersebut hingga selesai.

Pada terminal, berikan perintah <b>npm install && npm run dev</b> untuk compile file-file asset / javascript.

Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.

Buat database baru (kosong) pada mysql (via phpmyadmin) dengan nama <b>laravel-ecommerce</b>.

Duplikat file .env.example, lalu rename menjadi .env.

Kembali ke terminal, php artisan key:generate.

Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
<br>DB_CONNECTION=mysql
<br>DB_HOST=localhost
<br>DB_PORT=3306
<br>DB_DATABASE=Opaku
<br>DB_USERNAME=root
<br>DB_PASSWORD=

Setting QUEUE_CONNECTION agar bisa menjalankan proses queue menjadi QUEUE_CONNECTION=database.

Setting smtp email yang digunakan untuk mengirim password registrasi user dan resi order customer. Jangan lupa setting <b>Less secure app access</b> menjadi <b>On</b> agar bisa mengirimkan email. Contohnya smtp gmail seperti berikut:
<br>MAIL_DRIVER=smtp
<br>MAIL_HOST=smtp.gmail.com
<br>MAIL_PORT=587
<br>MAIL_USERNAME=alamat email kamu
<br>MAIL_PASSWORD=password email kamu
<br>MAIL_ENCRYPTION=tls

Setting TELEGRAM_KEY yang berguna untuk memberitahu admin jika ada return order. 
Cara memperoleh TELEGRAM_KEY dengan mencari username BotFather kemudian klik start. 
Ketik /newbot dan ikuti instruksi dari Telegram yang meminta data terkait nama bot dan username yang akan dibuat. 
Setelah semuanya selesai, Telegram akan mengirimkan token untuk mengakses HTTP API
<br>TELEGRAM_KEY=5344891203:AAEpwAxWJ86Fo-7zfZjnvwFHxNqcBsRfHTo

Setting RUANGAPI_KEY dengan mendaftar terlebih dahulu di https://ruangapi.com/register:
<br>RUANGAPI_KEY=TOKEN_RUANG_API_KAMU (BELUM)

Jalankan perintah <b>php artisan migrate</b>. Cek di phpmyadmin, seharusnya tabel sudah muncul.

Jalankan perintah <b>php artisan db:seed</b> untuk mengisi tabel users, provinces, cities, districts. Berikut email dan password untuk login admin pada http://localhost:8000/login
<br>EMAIL = rinto@admin.com
<br>PASSWORD = admin

Jalankan perintah <b>php artisan storage:link</b>

Setelah selesai, Jalankan perintah <b>php artisan serve</b> maka dapat diakses dengan http://localhost:8000/

Login Customer dapat diakses dengan http://localhost:8000/member/login

Register Customer dapat diakses dengan http://localhost:8000/member/register

Ketika sudah import excel pada saat hendak mass upload, jalankan perintah <b>php artisan queue:work</b> agar data diimport ke table products.

Cek Google Analytic meggunakan link yang ada di route
<br>login Backend terlebih dahulu<br>
<br>masukan link /analytic pada domain(localhost/adminstator/analytic)
<br>done<br>
<br>Google Analytic menggunakan API yang dengan google cloud platform<br>
<br>filenya di storage/app/analytic<br>
<br>integrasi package meggunakan spatie/google analytic dan spatie/googletagmanager<br>


SEKIAN PENJELASAN DARI SAYA, TERIMAKASIH


