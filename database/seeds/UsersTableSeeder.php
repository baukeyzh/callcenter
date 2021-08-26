<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Baukey Zhandos',
            'email' => 'baukey.zh@gmail.com',
            'password' => bcrypt('Cvetok847'),
            'admin' => 1
        ]);
        \App\Profile::create([
            'user_id' => $user->id,
            'course_id' => '1',
        ]);
    }
}
