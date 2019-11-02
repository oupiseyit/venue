<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'London',
            'Manchester',
            'Liverpool',
            'Birmingham'
        ];

        

        foreach ($locations as $location) {
            $slug = Str::slug($location);
            $locationObject = Location::create([
                'name' => $location,
                'slug' => $slug
            ]);

            $locationObject->addMediaFromUrl(public_path('images/locations/' . $slug . '.jpg'))->toMediaCollection('photo');
        }
    }
}
