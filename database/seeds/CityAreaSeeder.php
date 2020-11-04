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
				['name' => 'Samnabad'],
		];

		$city->areas()->createMany($lahore_areas);

		$khi_city = City::create([
            'name' => 'Karachi',
        ]);

		$khi_areas = [
				['name' => 'Gulshan'],
				['name' => 'Saddar'],
				['name' => 'Clifton'],
				['name' => 'Nazimabad'],
		];

		$khi_city->areas()->createMany($khi_areas);

        $quetta_city = City::create([
            'name' => 'Quetta',
        ]);

        $quetta_areas = [
            ['name' => 'Hussainabad'],
            ['name' => 'DA Khan'],
            ['name' => 'Bahria Town'],
            ['name' => 'Johar Abad'],
        ];

        $quetta_city->areas()->createMany($quetta_areas);
    }
}
