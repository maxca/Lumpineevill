# Lumpineevill v.1.0.4.*
For repository patten design under Laravel framework,
# Feature 
- can install via composer 
- can create update delete search all ,where like ,find by id , filter language 
- can reponse json format [not code API standard] 
- can generate request file 
	- Create{namespace}Request
	- Update{namespace}Request
	- Delete{namespace}Request
	- Get{namespace}Request
- can generate model and sync table automatically
- can generate controller 
- can generate route and mapping auto to controller
- can generate repository extended on APIBaseRepository
	- generate automatically interfaces of repository
# Installation 
- composer require samark/lumpineevill 
# Laravel 5.*: Serviceprovider
If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php
- Lumpineevill\ServiceProvider\LumpineevillServiceProvider::class

# Command
- php artisan samark:genfile 
