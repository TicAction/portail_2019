<?php

use Illuminate\Database\Seeder;

class BehaviorObservationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('behavior_observation')->delete();
        
        \DB::table('behavior_observation')->insert(array (
            0 => 
            array (
                'id' => 2,
                'behavior_id' => 171,
                'observation_id' => 4,
            ),
            1 => 
            array (
                'id' => 3,
                'behavior_id' => 173,
                'observation_id' => 36,
            ),
            2 => 
            array (
                'id' => 4,
                'behavior_id' => 174,
                'observation_id' => 36,
            ),
            3 => 
            array (
                'id' => 5,
                'behavior_id' => 193,
                'observation_id' => 36,
            ),
            4 => 
            array (
                'id' => 6,
                'behavior_id' => 193,
                'observation_id' => 19,
            ),
            5 => 
            array (
                'id' => 7,
                'behavior_id' => 102,
                'observation_id' => 36,
            ),
            6 => 
            array (
                'id' => 8,
                'behavior_id' => 102,
                'observation_id' => 2,
            ),
            7 => 
            array (
                'id' => 9,
                'behavior_id' => 198,
                'observation_id' => 34,
            ),
            8 => 
            array (
                'id' => 10,
                'behavior_id' => 198,
                'observation_id' => 3,
            ),
            9 => 
            array (
                'id' => 11,
                'behavior_id' => 198,
                'observation_id' => 20,
            ),
            10 => 
            array (
                'id' => 27,
                'behavior_id' => 213,
                'observation_id' => 32,
            ),
            11 => 
            array (
                'id' => 25,
                'behavior_id' => 210,
                'observation_id' => 32,
            ),
            12 => 
            array (
                'id' => 26,
                'behavior_id' => 210,
                'observation_id' => 18,
            ),
            13 => 
            array (
                'id' => 24,
                'behavior_id' => 209,
                'observation_id' => 32,
            ),
            14 => 
            array (
                'id' => 23,
                'behavior_id' => 208,
                'observation_id' => 34,
            ),
            15 => 
            array (
                'id' => 28,
                'behavior_id' => 214,
                'observation_id' => 33,
            ),
            16 => 
            array (
                'id' => 29,
                'behavior_id' => 215,
                'observation_id' => 32,
            ),
            17 => 
            array (
                'id' => 30,
                'behavior_id' => 216,
                'observation_id' => 33,
            ),
            18 => 
            array (
                'id' => 31,
                'behavior_id' => 217,
                'observation_id' => 33,
            ),
        ));
        
        
    }
}