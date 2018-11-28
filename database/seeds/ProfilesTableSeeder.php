<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $mayme = \App\User::where('name', 'Mayme')->first();
      $matt = \App\User::where('name', 'Matthew')->first();

      $p1 = new \App\Profile;
      $p1->profile_owner= $mayme->id;
      $p1->lastName = 'Clayton';
      $p1->firstName = 'Mayme';
      $p1->address = '2312 Weaver St.';
      $p1->city = 'Lexington';
      $p1->state = 'KY';
      $p1->zip = 40507;
      $p1->email = 'mayme.clayton@gmail.com';
      $p1->phone = '2702003000';
      $p1->lookingFor = 'rocking chair, bassinet, swaddles';
      $p1->biography = 'Mom to a sweet baby boy who loves balls and kicking things.';
      $p1->save();

      $p2 = new \App\Profile;
      $p2->profile_owner= $matt->id;
      $p2->lastName = 'Clayton';
      $p2->firstName = 'Matthew';
      $p2->address = '3478 Boehmann Court';
      $p2->city = 'Nicholasville';
      $p2->state = 'KY';
      $p2->zip = 40507;
      $p2->email = 'matthew.a.clayton@gmail.com';
      $p2->phone = '2703005000';
      $p2->lookingFor = 'baby swing, activity gym, stroller';
      $p2->biography = 'Mom to a sweet baby boy who loves balls and kicking things.';
      $p2->save();


    }
}
