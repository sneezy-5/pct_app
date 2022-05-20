# Small documentation for the installation
# this to laravel app

# info: For windows systems you must have composer installed on your machine 

1-first 
go to the root of the application

$cd pct_app/

2- do the installation
$composer update 

3-set migration
$php artisan migrate:fresh --seed
    wait until the migraton finishes


4-after the installation you can start the laravel server
$php artisan serve

the server starts in console with an address. Click on the address and lauch app


