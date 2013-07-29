<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => '',
            'password' => Hash::make(''),
			'name' => 'adminuser',
			'role' => 999,
        ));
    }
}