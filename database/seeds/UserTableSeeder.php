<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'      => 'Caribbean',
                    'email'     => 'admin@admin.fr',
                    'password'  => Hash::make('admin'),
                    'role'      => 'administrator',
                ],
                [
                    'name'      => 'jessica-olivier',
                    'email'     => 'jessica@jessica.fr',
                    'password'  => Hash::make('jessica'),
                    'role'      => 'visitor',
                ],
            ]
        );
    }
}
