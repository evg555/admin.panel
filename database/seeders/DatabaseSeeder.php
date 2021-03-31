<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            UserRolesTableSeeder::class,
            AttributeGroupsSeeder::class,
            AttributeProductsSeeder::class,
            AttributeValuesSeeder::class,
            BrandsSeeder::class,
            CategoriesSeeder::class,
            CurrenciesSeeder::class,
            GalleriesSeeder::class,
            ProductsSeeder::class,
            RelatedProductsSeeder::class,
            OrdersSeeder::class,
            AdminOrderProductsSeeder::class,
        ]);
    }
}
