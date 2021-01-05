<?php

use App\Candidate;
use App\Position;
use App\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = Position::all();
        $strands = Course::all();
        $candidates = [];

		foreach ($positions as $position)
	   	{
			for ($ctr = 0; $ctr < 3; $ctr++)
		   	{
                $count_value = $ctr + 1;

                $candidate = [
                    'name' => "$position->name $count_value",
                    'position_id' => $position->id,
					'type' => config('constants.candidatetypes.regular'),
                    'course_id' => Arr::random($courses->toArray())['id'],
                ];

                array_push($candidates, $candidate);
            }

			$candidate = [
				'name' => "$position->name ABSTAIN",
				'position_id' => $position->id,
				'type' => config('constants.candidatetypes.abstain'),
				'course_id' => Arr::random($courses->toArray())['id'],
			];

			array_push($candidates, $candidate);
        }

        Candidate::insert($candidates);
    }
}
