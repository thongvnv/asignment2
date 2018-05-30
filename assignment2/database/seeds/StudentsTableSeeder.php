<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'id' => 'D00522',
                'name' => 'Nguyen Huu Thong',
            ],
            [
                'id' => 'A001',
                'name' => 'Van Quan',
            ],
            [
                'id' => 'B002',
                'name' => 'Hoang Vu',
            ],
            [
                'id' => 'G005',
                'name' => 'Do Hoang',
            ],
            [
                'id' => 'R012',
                'name' => 'Van Hung',
            ]
        ]);
    }
}
