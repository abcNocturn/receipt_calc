<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Pia'
        ));

        User::create(array(
            'name' => 'Daniel'
        ));

    }
}
