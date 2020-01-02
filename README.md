## TTS

Need to Install:
1.	XAMPP
2.	Composer – Create via (composer create-project –prefer-dist laravel/laravel ProjectName)
3.	Visual Studio Code (laravel extension pack, php intelephence, bracket pair colorizer 2, material icon theme, php namespace resolver)
4.	Git bash

Git connection to repo:
-	Git config –-global user.name ‘’
-	Git config –-global user.email ‘’
-	Git remote add origin https://github.com/Michaelmical/TTS.git
-	Git add . (to add all modified files)
-	Git commit –m ‘comments’ (committing all changes)
-	Git push –u origin master
-	Git pull

For UI:
1.	AdminLTE

Laravel Pointers

MODEL

Create Controller Command
-	php artisan make:controller NAMEController (creates a single controller)
-	php artisan make:controller NAMEController –r (this will create the controller with default restful methods)
-	php artisan make:controller NAMEController –r –m NAME_of_model (creates a controller with default restful method with associates to the model defined)

Create Model Command
-	php artisan make:model NAME (creates single mode)
-	php artisan make:model NAME –mc (creates the model with migration and controller)

Model should have the 7 restful routes
1.	Index – Shows all resource
2.	Show – shows single resource
3.	Create – shows the view to create a resource
4.	Store – persist the new resource
5.	Edit – shows a view to edit a resource
6.	Update – persist the edited resource
7.	Destroy – delete the resource



DB Connection
1.	go to .env file
2.	check for db connection

MIGRATION
Commands
-	php artisan make:migration create_NAME_table – creating table schema/blueprint 
-	php artisan migrate – executes all schema/blueprint under database/migration directory
-	php artisan migrate:rollback – rollback migrations
-	php artisan migrate:fresh – drop all table and re-run all migration

VIEWS
-	{{asset}} – links to public directory

FORMS
1.	Always add @csrf in every forms
2.	@method(‘PUT’), @method(‘PATCH’), @method(‘DELETE’)
3.	Use Blade {{ $variable }}


tables needed:
employee
position
status
permission_group
department
division

