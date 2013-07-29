<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'hajime0083@gmail.com',
            'password' => Hash::make('610201'),
			'name' => 'adminuser',
			'role' => 999,
        ));
    }
}