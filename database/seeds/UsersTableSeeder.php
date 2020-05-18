<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        //  DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin =User::create([
            'name' => 'chin',
            'email' => 'teeraphatmychin@gmail.com',
            'password' => bcrypt('chinchin')

        ]);
        $admin =User::create([
            'name' => 'possiblecar.4',
            'email' => 'possiblecar.4@gmail.com',
            'password' => bcrypt('possible4@car')

        ]);
        $author =User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('author')

        ]);
        $user =User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user')

        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

        // factory(App\User::class, 1)->create();
    }
}
