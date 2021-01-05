<?php

use App\Section;
use App\Course;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();
        $levels = [1,2,3,4];
        $section_numbers = [1,2,3];

		$sections = [];

		foreach($courses as $course) 
		{
			foreach($levels as $level) 
			{
				foreach($section_numbers as $section_number)
				{
					$section = [
						'level' => $level,
						'course_id' => $course->id,
						'number' => $section_number
					];

					array_push($sections, $section);
				}
			}
		}

		Section::insert($sections);
    }
}
