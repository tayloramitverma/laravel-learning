<?php

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
        //$this->call(UsersTableSeeder::class);
        //$this->call(AdminTableSeeder::class);
        //$this->call(SettingsTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(AttributesTableSeeder::class);
        $this->call(AttributeValuesTableSeeder::class);
    }
}
