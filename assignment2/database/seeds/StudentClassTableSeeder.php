<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert([
            [
                'student_id' => 'D00522',
                'class_id' => 'T1707M',
                'status' => 1,
            ],
            [
                'student_id' => 'A001',
                'class_id' => 'T1707M',
                'status' => 1,
            ],
            [
                'student_id' => 'B002',
                'class_id' => 'T1708G',
                'status' => 1,
            ],
            [
                'student_id' => 'G005',
                'class_id' => 'T1707M',
                'status' => 1,
            ],
            [
                'student_id' => 'R012',
                'class_id' => 'C1707G',
                'status' => 0,
            ]
        ]);
    }
}
