<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;

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
      DB::table('role_user')->truncate();
      // we must to get roles from db
      $adminRole = Role::where('name', 'Administratorius')->first();
      $pardavejasRole = Role::where('name', 'Pardavejas')->first();
      $pirkejasRole = Role::where('name', 'Pirkejas')->first();

      $admin = User::create([
        'name' => 'Aleksandras',
        'email' => 'aleksandrnarusevic1@gmail.com',
        'password' => Hash::make('asAdminas7')
      ]);
      $pardavejas = User::create([
        'name' => 'Mykolas',
        'email' => 'my@gmail.com',
        'password' => Hash::make('asMykolas')
      ]);
      $pirkejas = User::create([
        'name' => 'Modestas',
        'email' => 'modestas@gmail.com',
        'password' => Hash::make('asModestas')
      ]);

      $admin->roles()->attach($adminRole);
      $pardavejas->roles()->attach($pardavejasRole);
      $pirkejas->roles()->attach($pirkejasRole);
    }
}
