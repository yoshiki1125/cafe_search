<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CafesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafes')->insert([
            [
                'name' => 'cafe1',
                'address' => '東京都渋谷区神泉町99-99',
                'access' => 'JR渋谷駅徒歩10分',
                'tell' => '0000-00-0000',
                'open_hours' => '10-22時',
                'regular_holiday' => '火曜日',
                'wifi' => '1',
                'outlet' => '0',
                'working_space' => '1',
                'smorking_space' => '1',
                'paper_cigarette' => '0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
            [
                'name' => 'cafe2',
                'address' => '東京都千代田区神田神保町88-88',
                'access' => '神保町駅徒歩5分',
                'tell' => '1111-11-1111',
                'open_hours' => '9-21時',
                'regular_holiday' => '水曜日',
                'wifi' => '0',
                'outlet' => '1',
                'working_space' => '1',
                'smorking_space' => '0',
                'paper_cigarette' => '0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            
            [
                'name' => 'cafe3',
                'address' => '東京都杉並区上荻0丁目88-88',
                'access' => '荻久保駅徒歩3分',
                'tell' => '2222-22-2222',
                'open_hours' => '8-20時',
                'regular_holiday' => '木曜日、日曜日',
                'wifi' => '1',
                'outlet' => '0',
                'working_space' => '1',
                'smorking_space' => '1',
                'paper_cigarette' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);  
    }
}
