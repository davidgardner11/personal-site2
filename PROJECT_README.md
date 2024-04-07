# PROJECT: Personal Website Project 
This PROJECT_README contains notes, comments, source links, etc. used while buiding this personal website project with PHP and Laravel. 

## Development Environment
MacBook Air
MacOS Sonoma 14.4
VSCode 1.88.0 (Universal)
PHP 8.3.4
Laravel Installer 5.7.0
SQLite


## Steps
### Setting up the project
1. Create a grandparent directory for the project: `mkdir website-tutorial-laravelnews`. Open this new directory using VSCode.
2. Create a README.md file in the parent directory for capturing notes, etc. That's this file.    
3. From the VSCode Terminal, create a personal website project using Laravel: `laravel new personal-site2 --git --pest`. Pest is a Testing Framework. Choose "No starter kit", then "SQLlite" at the prompts.
4. After the Laravel project is created, open the `/personal-site2/composer.json` file and update the PHP version in the "require" section. Use the `php -v` command to get the version. 
5. Once file changes are saved, from the VSCode terminal, run: `composer update` to update the dependency list. Then run `composer bump` to update the dependencies to the latest versions. Then run `composer update` again to account for dependency changes.
5. Create a new termimal window in VSCode named "artisan", cd into "personal-site2" directory, and run: `php artisan serve` to spin up the php web server. Leave this terminal running and use the original terminal window for future command line actions. 
6. Open `http://localhost:8000/` in a browser to confirm the Laraval v8.3 landing page is displayed. When needed, use Ctrl+C, _not_ Command+C, to stop the php web server.
7. Now commit these changes to GitHub 




