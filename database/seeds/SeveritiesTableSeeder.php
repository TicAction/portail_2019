<?php

use Illuminate\Database\Seeder;

class SeveritiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('severities')->delete();
        
        \DB::table('severities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'gravity_level' => 'yellow',
                'created_at' => '2018-12-12 10:52:10',
                'updated_at' => '2018-12-12 10:52:11',
            ),
            1 => 
            array (
                'id' => 2,
                'gravity_level' => 'orange',
                'created_at' => '2018-12-12 10:52:24',
                'updated_at' => '2018-12-12 10:52:24',
            ),
            2 => 
            array (
                'id' => 3,
                'gravity_level' => 'red',
                'created_at' => '2018-12-12 10:52:33',
                'updated_at' => '2018-12-12 10:52:34',
            ),
        ));
        
        
    }
}