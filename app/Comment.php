<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //
    protected $fillable = [
        'content','user_id','post_id'
    ];

    protected $primaryKey='id';
    
    protected $table='comments';

    
public function post(){

	return $this->belongsTo('App\Post');
}


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
