<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

<<<<<<< HEAD
class StrandSeeder extends Seeder
=======
class CourseSeeder extends Seeder
>>>>>>> parent of 7add29f... yikes
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('strand')->insert(
=======
        DB::table('course')->insert(
>>>>>>> parent of 7add29f... yikes
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
