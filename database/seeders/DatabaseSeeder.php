<?php

namespace Database\Seeders;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           UserSeeder::class,
           BrandSeeder::class,
           CatalogSeeder::class,
           ProductSeeder::class,
           AttributeSeeder::class,
           ValueSeeder::class,
           StorageSeeder::class,
            ReviewSeeder::class
        ]);


    }
}
