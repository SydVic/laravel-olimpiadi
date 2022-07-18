<?php

use App\Nation;
use Illuminate\Database\Seeder;

class NationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nations = config('discipline');
        foreach($nations['countries'] as $nation) {
            $new_nation = new Nation();
            $new_nation->name = $nation['name'];
            $new_nation->code = $nation['acronym'];

            $new_nation->save();
        }
    }
}
