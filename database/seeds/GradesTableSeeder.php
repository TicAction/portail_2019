<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grades')->delete();
        
        \DB::table('grades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'grade' => 'Première année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'grade' => 'Deuxième année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'grade' => 'Troisième année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'grade' => 'Quatrième année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'grade' => 'Cinquième année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'grade' => 'Sixième année',
                'created_at' => '2019-04-03 00:00:00',
                'updated_at' => '2019-04-03 00:00:00',
            ),
        ));
        
        
    }
}