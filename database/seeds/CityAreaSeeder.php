<?php

use Illuminate\Database\Seeder;
use App\City;
use App\Area;
class CityAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = City::create([
            'name' => 'Lahore',           
        ]);
		
		$lahore_areas = [
				['name' => 'Defence'],
				['name' => 'Gulberg'],
		];
		
		$city->areas()->createMany($lahore_areas);
		
		$khi_city = City::create([
            'name' => 'Karachi',           
        ]);
		
		$khi_areas = [
				['name' => 'Gulshan'],
				['name' => 'Saddar'],
		];
		
		$khi_city->areas()->createMany($khi_areas);
    }
}
