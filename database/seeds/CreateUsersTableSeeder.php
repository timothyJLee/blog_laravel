<?php

use Illuminate\Database\Seeder;

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$users = factory(App\User::class, 50)
           ->create()
           ->each(function ($u) {
                $u->posts()->save(factory(App\Post::class)->make());
            });
    }
}
