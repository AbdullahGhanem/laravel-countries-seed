<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
        $data = [
            'app/Docs/countries.sql',
            'app/Docs/country_translations.sql',

            'app/Docs/states.sql',
            'app/Docs/state_translations.sql',

            'app/Docs/cities.sql',
            'app/Docs/city_translations.sql',
        ];

        foreach ($data as $file) {
            // dd(file_get_contents($file));
            DB::unprepared( file_get_contents($file)); 
        }
	}
}
