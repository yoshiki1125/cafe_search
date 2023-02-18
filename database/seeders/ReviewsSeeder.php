<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [ 
                'cafe_id' => 1,
                'user_id' => 1,
                'text' => 'とてもおいしかった。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ],
            
            [
                'cafe_id' => 2,
                'user_id' => 2,
                'text' => 'まあまあおいしかった。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ],
    ]);
    }
}
