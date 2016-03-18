<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert(
            [
                [
                    'customer_id'       => '1',
                    'event_name'        => 'Mariage',
                    'event_date'        => '2016-05-07',
                    'event_place'       => 'Guadeloupe',
                    'status'            => 'ongoing',
                ]
            ]
        );
    }
}
