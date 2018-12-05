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
      $m2->message_text = 'I think my baby would really like this but I am not sure. Do you think I could try it out for a week to see? Thanks - looking forward to hearing from you!';
      $m2->save();

      $m3 = new \App\Message;
      $m3->sender_id= $mayme->id;
      $m3->recipient = $matt->id;
      $m3->message_text = 'Do you know if the pack and play will be available in January? We have friends visiting and I think this would be perfect!';
      $m3->save();

      $m4 = new \App\Message;
      $m4->sender_id= $mayme->id;
      $m4->recipient = $matt->id;
      $m4->message_text = 'The swing is PERFECT thank you so much!';
      $m4->save();


    }
}
