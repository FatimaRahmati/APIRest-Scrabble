<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statistics')->insert([
            'most_valuable_word' => 'CUnADO',
            'most_valuable_word_points' => '16',
            'language_code' => 'es'
        ]);

        \DB::table('statistics')->insert([
            'most_valuable_word' => 'CRACK',
            'most_valuable_word_points' => '12',
            'language_code' => 'en'
        ]);
    }
}
