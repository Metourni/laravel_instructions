# Some Larevel instruction 
This file contains some codes and instructions may be useful.
	
	@Auther : Metourni Noureddine
	@Description :
		($ cmd) => a terminal command,
# 1- Installation :
	
	$ composer global require "laravel/installer"
	$ laravel new prj

	Or: 

	$ composer create-project --prefer-dist laravel/laravel gym_algerie "5.5.*" 
# 2- Get project from GitHub :
	. Get the project from the github
	. run the cmd $ copmoser install
	. then $ cp .env.example .env
	. then $ php artisan key:generate
# 3- Run the project :
	$ php artisan serv
# 4- Migration : 
	$ php artisan migrate
## If there is this problème : 
	
	'#1071 - Specified key was too long; max key length is 767 bytes'
	1- go to : 'AppServiceProvider.php'
		2- put this code :
		"
			use Illuminate\Support\Facades\Schema;

			public function boot()
			{
    			Schema::defaultStringLength(191);
			}
		"
## If you have MacOS or Unix you should do this :
	1- go to /config/database.php
	2- put this code in mysql driver options :
		'unix_socket' => env('DB_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock'),```
# 5- Create Authentification :
	. Make shure that you migrate the data base (#4)
	. Then use the cmd $ php artisan make:auth
