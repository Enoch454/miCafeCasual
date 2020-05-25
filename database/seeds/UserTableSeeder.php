<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('nombre', 'user')->first();
        $role_admin = Role::where('nombre', 'admin')->first();

        $user = new User();
        $user->name = 'Enoch Galindo';
        $user->telefono = '2311141826';
        $user->email = 'enoch@enoch.com';
        $user->password = bcrypt('12345678');
        $user->direccion = 'Los perales #45';
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Gerundio';
        $user->telefono = '2311456930';
        $user->email = 'gerundio@gerundio.com';
        $user->password = bcrypt('12345678');
        $user->direccion = 'Hidalgo #63';
        $user->save();
        $user->roles()->attach($role_user);
    }
}
