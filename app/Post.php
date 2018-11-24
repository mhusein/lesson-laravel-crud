<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name default
    protected $table = 'posts';
    // Primary Key default
    public $primaryKey = 'id';
    // Timestamps default
    public $timestamps = true;
     
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
