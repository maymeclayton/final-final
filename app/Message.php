<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
  public function user() {
  return $this->belongsTo('App\User', 'sender_id');
}

  public function prettyUpdate() {
    $dt = new Carbon($this->created_at);
    if ($dt->isToday()) {
        return $dt->format('g:i:s a');
    }
    return $dt->format('n/j/y \\a\\t g:i:s a');
}

}
