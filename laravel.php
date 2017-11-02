/**
*
* @Auther : Metourni Noureddine
*
*
* @Description : 
				[
					($ cmd) => mean that is a terminal cmd,
				]
*/

1- Installation :

	$ composer global require "laravel/installer"
	$ laravel new prj

	Or: 

	$ composer create-project --prefer-dist laravel/laravel gym_algerie "5.5.*" 

2- migration : 
	$ php artisan migrate

	if there is this problème : '#1071 - Specified key was too long; max key length is 767 bytes'
		1- go to : 'AppServiceProvider.php'
		2- put this code :
		
		'
			use Illuminate\Support\Facades\Schema;

			public function boot()
			{
    			Schema::defaultStringLength(191);
			}
		'
	end if;

	if you have MacOS or Unix you should do this :
		1- go to /config/database.php
		2- put this code in mysql driver options :
		'
			'unix_socket' => env('DB_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock'),

		'
	endif;


