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
      \DB::table('users')->delete();
      $users = [
        ['id'=>1, 'role_id'=>1, 'name'=>'imsak', 'email'=>'imsak@email.com', 'password'=>bcrypt('chelsea')],
        ['id'=>2, 'role_id'=>2, 'name'=>'morata', 'email'=>'morata@email.com', 'password'=>bcrypt('chelsea')],
        ['id'=>3, 'role_id'=>4, 'name'=>'kante', 'email'=>'kante@email.com', 'password'=>bcrypt('chelsea')],
        ['id'=>4, 'role_id'=>4, 'name'=>'hazard', 'email'=>'hazard@email.com', 'password'=>bcrypt('chelsea')]
      ];

      \DB::table('users')->insert($users);
    }
}
