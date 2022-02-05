<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
           'name'=>'1-tur'
        ]);
        \App\Type::create([
           'name'=>'2-tur'
        ]);
        \App\Type::create([
           'name'=>'3-tur'
        ]);
        \App\Type::create([
           'name'=>'4-tur'
        ]);
        \App\Type::create([
           'name'=>'5-tur'
        ]);
        \App\Type::create([
           'name'=>'6-tur'
        ]);
        \App\Type::create([
           'name'=>'7-tur'
        ]);
        \App\Type::create([
           'name'=>'8-tur'
        ]);
        \App\Type::create([
           'name'=>'9-tur'
        ]);
        \App\Type::create([
           'name'=>'10-tur'
        ]);
    }
}
