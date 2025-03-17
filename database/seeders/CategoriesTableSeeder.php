<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Model', 'description' => 'Represent tables in your database, enabling you to perform essential operations—like querying, updating, and deleting data—through expressive, human-readable code..'],
            ['id' => 2, 'category_name' => 'View', 'description' => 'to be displayed to the user on their browser and the user can interact with it'],
            ['id' => 3, 'category_name' => 'Controller', 'description' => 'Help in maintaining a separation of concerns by encapsulating the request handling logic separate from the routes and views.'],
            ['id' => 4, 'category_name' => 'Routes', 'description' => 'Routes define how your web application responds to different HTTP requests by mapping URLs to specific actions or controllers'],
            ['id' => 5, 'category_name' => 'Middleware', 'description' => 'Provide a convenient mechanism for inspecting and filtering HTTP requests entering your application.'],
            ['id' => 6, 'category_name' => 'Blade Templates', 'description' => 'A built-in templating engine that simplifies the creation of dynamic HTML layouts by allowing you to write HTML with embedded PHP code'],
            ['id' => 7, 'category_name' => 'Migrations', 'description' => 'A way to manage your database schema changes using PHP code, allowing you to create, modify, and version-control database tables and columns in a consistent and repeatable manner. '],
            ['id' => 8, 'category_name' => 'Seeders', 'description' => 'PHP classes used to populate your database with initial or test data.'],
            ['id' => 9, 'category_name' => 'Database', 'description' => 'The database configuration file is app/config/database.php. In this file you may define all of your database connections, as well as specify which connection should be used by default.'],
            ['id' => 10, 'category_name' => 'Eloquent ORM', 'description' => 'An object relational mapper (ORM) that is included by default within the Laravel framework'],
        ]);
    }
}

