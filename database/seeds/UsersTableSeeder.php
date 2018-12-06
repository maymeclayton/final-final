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

      $monica = new \App\User;
      $monica->name='Monica';
      $monica->email='monica@monica.com';
      $monica->password=bcrypt('secret');
      $monica->save();

      $sarah = new \App\User;
      $sarah->name='Sarah';
      $sarah->email='sarah@gsarah.com';
      $sarah->password=bcrypt('secret');
      $sarah->save();

      $lauren = new \App\User;
      $lauren->name='Lauren';
      $lauren->email='lauren@lauren.com';
      $lauren->password=bcrypt('secret');
      $lauren->save();

      $kevin = new \App\User;
      $kevin->name='Kevin';
      $kevin->email='kevin@kevin.com';
      $kevin->password=bcrypt('secret');
      $kevin->save();

    }
}
