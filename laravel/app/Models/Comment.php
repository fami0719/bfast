<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'text'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function getComments(Int $post_id)
    {
      return $this->with('user')->where('post_id', $post_id)->get();
    }

    public function commentStore(Int $user_id, Array $data)
    {
      $this->user_id = $user_id;
      $this->post_id = $data['post_id'];
      $this->text = $data['text'];
      $this->save();

      return;
    }
}
