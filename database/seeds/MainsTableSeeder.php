<?php

use Illuminate\Database\Seeder;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Main::create([
            'name'=>'Asosiy Tarkib'
        ]); App\Main::create([
            'name'=>'Zahirada'
        ]);
        App\Main::create([
            'name'=>'Kiritilmagan'
        ]);
    }
}
