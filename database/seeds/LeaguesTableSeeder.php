<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\League::create([
            'name'=>'Birinchi Liga'
        ]);
        App\League::create([
            'name'=>'Oliy Liga'
        ]);

    }
}
