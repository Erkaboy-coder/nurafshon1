<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Player::create([
            'fio'=>'Odil Axmedov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 9,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
            'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Sardor Rashidov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 12,
            'birthday'=> '1991-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
            'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Aziz Haydarov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 8,
            'birthday'=> '1988-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
             'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Sardor Mirzoyev',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 52,
            'birthday'=> '1990-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Eldor Shomurodov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 7,
            'birthday'=> '1994-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Azimboy Axmedov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 5,
            'birthday'=> '1987-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Dostonbek Hamdamov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 11,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Jahongir Jumaniyozov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 10,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
            'main_id' =>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Ikrom Aliboyev',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 45,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>2,
            'team_id' =>4,
             'main_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Ali Valiev',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 89,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>3,
            'team_id' =>4,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Salim Nosirov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 56,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Odil Salimov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 15,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>4,
            'team_id' =>4,
        'main_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Odil Alimov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 99,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>3,
        'main_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Solijon Axmedov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 91,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>1,
            'team_id' =>4,
        'main_id' =>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);App\Player::create([
            'fio'=>'Odil Olimov',
            'image'=>'images/jFZSJpRvTIN7MyTPAfJgPsM4zQkRC68W0PAUkZq7.jpeg',
            'player_number' => 53,
            'birthday'=> '1985-05-12',
            'region'=>'Toshkent',
            'position_id'=>4,
            'team_id' =>3,
            'main_id' =>3,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
