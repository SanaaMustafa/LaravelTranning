<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title', 'url', 'body','auther_id'
    ];
    protected $primaryKey ='id';
    protected $table='posts';

    
    public function comments()
    {
        return $this->hasMany('Comment');
    }
}
