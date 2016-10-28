<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    return $this->belongsTo('App\Article', 'article_id');
    protected $fillable = [

      'content', 'article_id'

    ];
}


public function article() {

    return $this->belongsTo('App\Article', 'article_id');

  }