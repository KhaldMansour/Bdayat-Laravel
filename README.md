
### Installation and Configuration

** Install Bdayat from your console.**

##### Execute these commands below, in order

1. Create a database and set its name in your .env file under (DB_DATABASE)
2. In your .env file put your mail driver credentials (like: mailtrap)
3. In your .env file change (QUEUE_CONNECTION=sync) to (QUEUE_CONNECTION=database)
4. In your terminal run these commands
~~~
 composer install
~~~

~~~
php artisan migrate
~~~

~~~
php artisan db:seed
~~~

~~~
php artisan key:generate
~~~

~~~
php artisan passport:install
~~~

~~~
php artisan passport:keys
~~~

~~~
php artisan queue:table
~~~

~~~
php artisan migrate
~~~

~~~
php artisan vendor:publish
~~~

~~~
Type 0 then press enter
~~~

~~~
php artisan optimize
~~~

~~~
php artisan serve
~~~

**How to log in as admin:**

> *http(s)://{example}.com/admins/login*

~~~
email:test@admin.com
password:123456789
~~~


** To run laravel jobs **

~~~
php artisan queue:work
~~~