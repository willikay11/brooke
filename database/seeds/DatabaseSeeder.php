<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
//        $this->call(SettingsSeeder::class);
//        $this->call(TranslationSeeder::class);
//        $this->call(PageSeeder::class);
//        $this->call(MenuSeeder::class);
//        $this->call(MenulinkSeeder::class);
//        $this->call(RoleSeeder::class);
//        $this->call(PermissionSeeder::class);
//        $this->call(PermissionRoleSeeder::class);
//        $this->call(CountriesSeeder::class);
//        $this->command->info('Seeded the countries!');
        Model::reguard();
    }
}
