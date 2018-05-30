<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeslotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_slots')->insert([
            [
                'time' => '8h-12h',
            ],
            [
                'time' => '13h30-17h30',
            ],
            [
                'time' => '17h30-21h'
            ]
        ]);
    }
}
