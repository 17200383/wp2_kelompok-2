# WP2 _Kelompok 2_

## Sebelum Mulai

- Buka [XAMPP](https://www.apachefriends.org/ "XAMPP"), klik config Apache, pilih PHP (php.ini)
- Cari ";extension=intl", hilangkan titik komanya (;) menjadi (extension=intl")
- Letakan folder di \xampp\htdocs\
- Jalankan Apache dan MySQL pada [XAMPP](https://www.apachefriends.org/ "XAMPP")
- Buka [phpmyadmin](http://localhost/phpmyadmin "http://localhost/phpmyadmin") dan klik import (atas topbar)
- Import database yang ada di folder \wp2_kelompok-2\assets\storage\wp2_kelompok-2.sql
- Buka [/wp2_kelompok-2/](http://localhost/wp2_kelompok-2/ "http://localhost/wp2_kelompok-2/")

## Login detail

### Admin 
Username 'admin' - Password 'admin'
(System administrator)
- All

### User
Username 'user' - Password 'user'
(Petugas)
- Patient (namepat, telp, addr)
- medicines (name, comments, stock)

### Dokter
Username 'doctor' - Password 'doctor'
(Dokter)
- Patient (medrec, medicine)

## Software
- [Codeigniter4](https://www.codeigniter.com/user_guide/intro/index.html "Codeigniter4")
- [Composer](https://getcomposer.org/ "Composer")
- [Bootstrap 5](https://getbootstrap.com/ "Bootstrap 5")

## Error
Jika terjadi error, install [Composer](https://getcomposer.org/download/ "Composer"), buka command prompt pada folder, jalankan perintah 
```sh
composer -install -vvv
```
