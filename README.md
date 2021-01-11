# registrationdavidlee
 
To run the project

Clone it to your computer.
Run "composer install" to install application dependencies.

create database "registrationform"

Run "php artisan migrate" to migrate the database.

localhost/registrationdavidlee/public


A referral flow looks something like this

A user clicks a link that takes them to the application register page. http://domain/register?ref=username
When they register, their registration should be linked to the user whose referral link they used in registering.
The user whose referral link was used to register should get notified that someone registered using their referral link.
The new user should have his or her own referral link.