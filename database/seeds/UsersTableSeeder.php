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
        $user=App\User::create([
            'name'=>'admin',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('123456'),
            'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/admin.jpg',
            'about'=> 'Lorem ipsum dolor sit amet, consecteur......',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
