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
      //  $this->call(PlayersTableSeeder::class);
       // $this->call(TypesTableSeeder::class);
     // $this->call(PositionsTableSeeder::class);
        $this->call(MainsTableSeeder::class);
//        $this->call(LeaguesTableSeeder::class);

    }
}
