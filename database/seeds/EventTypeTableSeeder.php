<?php

use App\EventType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventTypes = [
            'Conferences',
            'Award Cervemonies',
            'The unsual',
            'Private dining',
            'Meeting',
            'Parties'
        ];

        foreach ($eventTypes as $eventType) {
            EventType::create([
                'name' => $eventType,
                'slug' => Str::slug($eventType)
            ]);
        }
    }
}
