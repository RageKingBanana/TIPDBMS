<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')->insert(
            [
                [
                    'name' => 'President'
                ],
                [
                    'name' => 'Vice President'
                ],
                [
                    'name' => 'Secretary'
                ],
                [
                    'name' => 'Treasurer'
                ],
                [
                    'name' => 'Auditor'
                ],
                [
                    'name' => 'Assistant Secretary'
                ],
                [
                    'name' => 'Assistant Treasurer'
                ],
                [
                    'name' => 'Linkages Officer'
                ],
                [
                    'name' => 'Communications Officerr'
                ],
                [
                    'name' => 'Business Manager'
                ],
                [
                    'name' => 'Logistics Manager'
                ],
                [
                    'name' => 'Office Manager'
                ],
            ]
        );
    }
}
