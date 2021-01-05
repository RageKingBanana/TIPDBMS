<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert(
            [
                [
                    'name' => 'Computer Engineering',
                ],
                [
                    'name' => 'Chemical Engineering',
                ],
                [
                    'name' => 'Architecture',
                ],
                [
                    'name' => 'Electrical Engineering',
                ],
                [
                    'name' => 'Civil Engineering',
                ],
                [
                    'name' => 'Electronics Engineering',
                ],
                [
                    'name' => 'Industrial Engineering',
                ],
                [
                    'name' => 'Mechanical Engineering',
                ],
            ]
        );
    }
}
