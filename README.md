# itu_v1

1. download XAMPP
2. download composer
3. V phpMyAdmin vytvoriť databázu itu_v1
4. env.example zmeniť na env
5. v env zmeniť :
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
  na :
  DB_DATABASE=itu_v1
  DB_USERNAME=root
  DB_PASSWORD=vaše heslo phpMyAdmin
6. v cmd v adresári, kde máte projekt (najlepšie xampp/htdocs/itu_v1) spustite:

  1. composer install (alebo php composer.phar install)
  2. npm install
  3. npm run dev
  4. php artisan key:generate
  5. php artisan migrate
  6. php artisan db:seed
  7. php artisan serve

na to aby ste mali localhost pozrite si toto video:
https://www.youtube.com/watch?v=H3uRXvwXz1o

dúfam všetko..
