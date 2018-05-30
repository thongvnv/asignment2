<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'id' => 'T1707M',
                'status' => 1
            ],
            [
                'id' => 'T1708G',
                'status' => 1
            ],
            [
                'id' => "C1707G",
                'status' => 0
            ]
        ]);
    }
}
