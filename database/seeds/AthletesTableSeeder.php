<?php

use App\Athlete;
use Illuminate\Database\Seeder;

class AthletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $athletes = config('discipline');
        foreach($athletes['athlets'] as $athlete) {
            $new_athlete = new Athlete();
            $new_athlete->name = $athlete['name'];
            $new_athlete->gender = $athlete['genre'];

            $new_athlete->save();
        }
    }
}
