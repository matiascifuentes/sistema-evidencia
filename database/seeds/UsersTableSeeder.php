<?php

use App\Role;
use App\User;
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
        //
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin12345');
        $user->save();
        $user->roles()->attach(Role::where('name', 'admin')->first());      

        $user = new User();
        $user->name = 'profe';
        $user->email = 'profe@gmail.com';
        $user->password = Hash::make('profe12345');
        $user->save();
        $user->roles()->attach(Role::where('name', 'profesor')->first());

        $user = new User();
        $user->name = 'revisor';
        $user->email = 'revisor@gmail.com';
        $user->password = Hash::make('revisor12345');
        $user->save();
        $user->roles()->attach(Role::where('name', 'revisor')->first());
        
        $user = new User();
        $user->name = 'dac';
        $user->email = 'dac@gmail.com';
        $user->password = Hash::make('dac12345');
        $user->save();
        $user->roles()->attach(Role::where('name', 'dac')->first());
      
        
    }
}
