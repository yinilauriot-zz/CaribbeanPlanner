<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            [
                [
                    'user_id'           => '2',
                    'bride_name'        => 'Jessica',
                    'bridegroom_name'   => 'Olivier',
                    'address'           => '25 rue Saint-Martin',
                    'postal_code'       => '75001',
                    'city'              => 'Paris',
                    'country'           => 'France',
                    'telephone'         => '0123456789',
                ]
            ]
        );
    }
}
