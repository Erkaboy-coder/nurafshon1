<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Position::create([
            'name'=>'Hujumchi'
        ]);
        App\Position::create([
            'name'=>'Yarim Himoyachi'
        ]);
        App\Position::create([
            'name'=>'Himoyachi'
        ]);
        App\Position::create([
            'name'=>'Darvozabon'
        ]);
    }
}
