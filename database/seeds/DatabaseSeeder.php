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
        // $this->call(UsersTableSeeder::class);
        $this->call(CatentclsTableSeeder::class);
        $this->call(CatentqulTableSeeder::class);
        $this->call(CatentuniTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TblentprdTableSeeder::class);
        $this->call(TblentaucTableSeeder::class);
        $this->call(TblentbidTableSeeder::class);
    }
}
