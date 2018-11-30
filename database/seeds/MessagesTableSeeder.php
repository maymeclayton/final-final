<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
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

      $m1 = new \App\Message;
      $m1->sender_id = $matt->id;
      $m1->recipient = $mayme->id;
      $m1->message_text = 'Here is a test message.';
      $m1->save();

      $m2 = new \App\Message;
      $m2->sender_id= $mayme->id;
      $m2->recipient = $matt->id;
      $m2->message_text = 'Testing Testing One Two Three';
      $m2->save();


    }
}
