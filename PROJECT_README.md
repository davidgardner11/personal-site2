# PROJECT: Personal Website Project 
This PROJECT_README contains notes, comments, source links, etc. used while buiding this personal website project with PHP and Laravel. 

## Development Environment
- MacBook Air 2023 / 16GB 
- MacOS Sonoma 14.4
- VSCode 1.88.0 (Universal)
- PHP 8.3.4
- Laravel Installer 5.7.0
- SQLite


## Steps (and sub steps)
### Step 1: Setup the project
1. Create a grandparent directory for the project: `mkdir website-tutorial-laravelnews`. Open this new directory using VSCode.
2. Create a README.md file in the parent directory for capturing notes, etc. That's this file.    
3. From the VSCode Terminal, create a personal website project using Laravel: `laravel new personal-site2 --git --pest`. Pest is a Testing Framework. Choose "No starter kit", then "SQLlite" at the prompts.
4. After the Laravel project is created, open the `/personal-site2/composer.json` file and update the PHP version in the "require" section. Use the `php -v` command to get the version. 
5. Once file changes are saved, from the VSCode terminal, run: `composer update` to update the dependency list. Then run `composer bump` to update the dependencies to the latest versions. Then run `composer update` again to account for dependency changes.
5. Create a new termimal window in VSCode named "artisan", cd into "personal-site2" directory, and run: `php artisan serve` to spin up the php web server. Leave this terminal running and use the original terminal window for future command line actions. 
6. Open `http://localhost:8000/` in a browser to confirm the Laraval v8.3 landing page is displayed. When needed, use Ctrl+C, _not_ Command+C, to stop the php web server.
7. Now commit changes to GitHub 

### Step 2: Add Tailwind CSS
1. Remove ` "axios": "^1.6.4",` from `package.json` file
2. Remove ` "./resources/**/*.js", "./resources/**/*.vue",` from `tailwind.config.js` file
3. Then, onto step 2, "Install Tailwind CSS" instructions on https://tailwindcss.com/docs/guides/laravel by running this in the terminal: `npm install -D tailwindcss postcss autoprefixer`, then `npx tailwindcss init -p`
4. Onto step 3, "Configure Template paths". Replace code in `tailwind.config.js` with code from [instruction page](https://tailwindcss.com/docs/guides/laravel). 
5. Onto step 4, "Add the Tailwind directives to your CSS" by copying the code into the `/resources/css/app.css` file.
6. Onto step 5, "Start your build process" by running this in the terminal: `npm run dev`
7. This previous step will start the laravel server, so this terminal is locked by the npm process. Rename the terminal tab to "npm" and create a new tab named "zsh"
8. Open browser to confirm `http://localhost:8000/` is still loading. If so, now npm dev server are vite (javascript build tool) are running. 
9. Now commit changes to GitHub. [Timestamp 10:20]

### Step 3: Focus on routes and resources (stylesheets, javascripts, blade views). Add home page
1. Open `/resources/views/welcome.blade.php` and replace all 3 lines below "Styles Section" comment with: `@vite(['resources/css/app.css', 'resources/js/app.js'])`
2. At this point, I deviated from the tutorial and replaced all of the `welcome.blade.php` "body" content with the "body" content from `temp.html` which was built using header, footer, and hero components from https://flowbite.com/blocks 
3. Now, reload the site and it looks very different.
4. Commit changes to GitHub [Timestamp 12:05]
5. Next, switch from using layouts to components. Start by creating `/components` and `/pages` folders underneath `resources/views/`. 
6. Add a `layout.blade.php` file to the `/components` folder and copy all content from `welcome.blade.php` into `layout.blade.php`
7. Replace all of the content in `welcome.blade.php` with this: x-layout tag. p-tag you can't see me. endp-tag. endx-layout-tag
8. update `web.php` file. See [Timestamp 16:20]
9. Add a `home.blade.php` file to the `/pages` folder and copy all content from `welcome.blade.php` into `home.blade.php`. Delete `welcome.blade.php`. Site will be broken temporarily.
10. Now update the route in `web.php` like this `Route::view('/', 'pages.home')->name('home');` Site should be working again. [Timestamp 17:45]

### Step 4: Add blog and about blade pages then start customizing layout.blade.php with Tailwind CSS UI components  
1. Update the `web.php` file with the new routes and create  new `blog.blade.php` and `about.blade.php` files [Timestamp 19:26]
2. Replace the entire body tag in `layout.blade.php` with "{{ $slot }}". Confirm the update to the site in the browser.  [Timestamp 20:00] 
3. Now, revert the `layout.blade.php` file. Essentially, back to Step 3.2  
4. At this point in the tutorial [Timestamp 23:00], the author all of the sub-sections in "main". Leaving only the header, footer, and main sections. I updated the main section to embed the "slot" variable. Now "main" looks like this => ![code screenshot](Screenshot_1.png). 
5. Now, to update the `home.blade.php` page by pasting all of the content inside the temp.html file "main" section between the "x-layout" tags [Timestamp 26:00]
6. Commit to GitHub. [Timestamp 26:10]

### Step 5: Make the site dynamic 
1. Start by modifying `home.blade.php` with my name and a greeting. (see updated file)
2. Commit to GitHub. [Timestamp 28:50]
3. Now, switch to using a Controller instead of a View. Follow the tutorial instructions at [Timestamp 28:45] 
4. On the zsh terminal, run: `php artisan make:controller Pages/HomeController --invokable --pest` [Timestamp 29:30]
5. Change '/' route to a get request in `web.php`. 
6. Make changes to the `HomeController.php` file [Timestamp 31:03]. Make sure to add `use Illuminate\Contracts\Views\View` and remove `extends Controller` from HomeController class
7. Update `home.blade.php` file by replacing static info with {{ $message }} 
8. View site to confirm variables are passed correctly. Commit to GitHub [Timestamp 31:40]

### Step 6: Set up unit testing
1. Add .gitkeep to both folders
2. Delete `ExampleTest.php` files from `/tests/Feature` and `/tests/Unit` folders
3. Update the `/tests/Feature/Http/Controllers/Pages/HomeControllerTest.php` file as shown starting at [Timestamp 32:25]
4. Replace `test` method with `it` method. Make more changes.
5. Skip the change where he adds a Status Http package and modifies the `assertStatus(200);` line. Just leave the `200`.
6. Run `php artisan test` from terminal to run unit tests. It will fail without both `use` lines. Hopefully 1 test passes.
7. Add another `it` method to do testing as shown at [Timestamp 34:24]
8. Run `php artisan test` from terminal again to run unit tests. Hopefully 2 tests pass. 
9. Add another `it` method to do testing as shown at [Timestamp 35:33]
10. Run `php artisan test` from terminal again to run unit tests. Hopefully 3 tests pass. 
11. View site to confirm it is still working correctly. Commit to GitHub [Timestamp 36:00]

### Step 7: Persist blog posts with Eloquent ORM and SQLite database. Expose to "Migration" 
1. Setup "model" e.g. "table" starting at [Timestamp 37:00]
2. on zsh terminal, run: `php artisan make:model BlogPost -mf` [Timestamp 37:40]. Note: I changed model name from "Post" to "BlogPost", thus affeting the generated table name. Keep in mind during tutorial
3. open the newly created `..._create_blog_posts_table.php` and make changes shown starting at [Timestamp 39:00]
4. and also changes to `BlogPostFactory.php` and `BlogPost.php`
5. Update `.env` file to confirm `DB_CONNECTION=sqlite` .  Change `APP_NAME` to "David's Site"
6. in zsh termianl run: `php artisan migrate` to migrate the tables into the SQLite database  [Timestamp 46:20]
7. Using database client, open SQLite file. [Timestamp 46:45]. 
8. Using database client, confirm "blog_posts" table exists.
9. To open the Tinker tool, type `php artisan tinker`.  Then enter `App\Models\BlogPost::factory()->count(20)->create()` to populate the blog_posts table with 20 rows. Hit Ctrl+C to exit Tinker.
10. Using database client, confirm "blog_posts" table is populated with 20 new rows.
11. Now, time to incorporate the blog post content from the database into `home.blade.php` [Timestamp 48:15]
12. Copy the free blog post component from https://flowbite.com/blocks/marketing/blog/, and paste it below the "hero" section in the new "blog" section
13. Make updates to the `HomeController.php` file as shown at  [Timestamp 49:45]. 
14. Also, update the `home.blade.php` file by wrapping an "article" in the blog posts section with a @forelse loop. The @forelse loop ensures the loop doesn't error out if there is no data from the database table. Clear out the database tables with: `php artisan migrate:fresh` command [Timestamp 51:58]
16. Commit to GitHub [Timestamp 55:30]

### Step 8: Set up routing for blog posts
1. Make sure to repopulate the blog_posts_table with "fake" data using Tinker. Repeat step 7.9
2. Now, create a new route to the bew blog post page. Edit `web.app` according to instructions at [Timestamp 56:10]
3. Create controller by running: `php artisan make:controller Pages/Blog/ShowController --invokable --pest`  
4. Update `/app/Http/Controllers/Pages/Blog/ShowController.php` as shown at [Timestamp 57:30]
5. Update blog post href on `home.blade.php` as shown at [Timestamp 57:57]. 
6. Test by clicking a blog post. Redirects to a blog route depending on the $id. [Timestamp 58:05]. 
7. Commit to GitHub [Timestamp 58:15]
8. More updates to `ShowController.php` as shown at [Timestamp 1:00:10]
9. First, create a new directory named `blog` underneath `/resources/views/pages/`, and then create the new blog view (e.g. page), `show.blade.php` [Timestamp 1:00:15]
10. Then, between the x-layout tags, cut-and-paste the HTML from the 1st free example here: https://flowbite.com/blocks/marketing/content/  
11. Update replace the values in the H1 and p (content) tags with $blogpost->title and $blogpost->content, respectively
12. Finally, clean up unnecessary parts of the 'show" page.
13. Done! You've created a blog post page and implemented the routing to it.
14. Committing to github. [Timestamp 1:20:00]

### Step 9: Add unit tests to ShowCOntroller, wrap up
1. Follow instructions starting at [Timestamp 1:02:55] to create unit tests in `ShowControllerTest.php` 
2. Summary of unit tests at [Timestamp 1:08:06]
3. Review models and factories [Timestamp 1:08:30]
4. Add a new column "published" (boolean). Run `php artisan make:migration alter_blog_posts_add_published --table=blog_posts` and follow instructions [Timestamp 1:09:30]
5. Update all the files to handle this new column
7. That's it! All done! Committing final updates to GitHub. The app runs just fine, as does `php artisan test` [Timestamp 1:17:30] 
