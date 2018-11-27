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
      $mayme = new \App\User;
      $mayme->name = 'Mayme';
      $mayme->email = 'mayme.clayton@gmail.com';
      $mayme->password = bcrypt('secret');
      $mayme->save();

      $matt = new \App\User;
      $matt->name='Matthew';
      $matt->email='matthew.a.clayton@gmail.com';
      $matt->password=bcrypt('secret');
      $matt->save();
      
    }
}
