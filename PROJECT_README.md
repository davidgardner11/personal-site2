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
### Stage 1: Setup the project
1. Create a grandparent directory for the project: `mkdir website-tutorial-laravelnews`. Open this new directory using VSCode.
2. Create a README.md file in the parent directory for capturing notes, etc. That's this file.    
3. From the VSCode Terminal, create a personal website project using Laravel: `laravel new personal-site2 --git --pest`. Pest is a Testing Framework. Choose "No starter kit", then "SQLlite" at the prompts.
4. After the Laravel project is created, open the `/personal-site2/composer.json` file and update the PHP version in the "require" section. Use the `php -v` command to get the version. 
5. Once file changes are saved, from the VSCode terminal, run: `composer update` to update the dependency list. Then run `composer bump` to update the dependencies to the latest versions. Then run `composer update` again to account for dependency changes.
5. Create a new termimal window in VSCode named "artisan", cd into "personal-site2" directory, and run: `php artisan serve` to spin up the php web server. Leave this terminal running and use the original terminal window for future command line actions. 
6. Open `http://localhost:8000/` in a browser to confirm the Laraval v8.3 landing page is displayed. When needed, use Ctrl+C, _not_ Command+C, to stop the php web server.
7. Now commit changes to GitHub 

### Stage 2: Add Tailwind CSS
1. Remove ` "axios": "^1.6.4",` from `package.json` file
2. Remove ` "./resources/**/*.js", "./resources/**/*.vue",` from `tailwind.config.js` file
3. Then, onto step 2, "Install Tailwind CSS" instructions on https://tailwindcss.com/docs/guides/laravel by running this in the terminal: `npm install -D tailwindcss postcss autoprefixer`, then `npx tailwindcss init -p`
4. Onto step 3, "Configure Template paths". Replace code in `tailwind.config.js` with code from [instruction page](https://tailwindcss.com/docs/guides/laravel). 
5. Onto step 4, "Add the Tailwind directives to your CSS" by copying the code into the `/resources/css/app.css` file.
6. Onto step 5, "Start your build process" by running this in the terminal: `npm run dev`
7. This previous step will start the laravel server, so this terminal is locked by the npm process. Rename the terminal tab to "npm" and create a new tab named "zsh"
8. Open browser to confirm `http://localhost:8000/` is still loading. If so, now npm dev server are vite (javascript build tool) are running. 
9. Now commit changes to GitHub. [Timestamp 10:20]

### Stage 3: 





