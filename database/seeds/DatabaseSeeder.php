<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(BehaviorsTableSeeder::class);
        $this->call(BehaviorObservationTableSeeder::class);
        $this->call(ObservationsTableSeeder::class);
        $this->call(SeveritiesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
    }
}
