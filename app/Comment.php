<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'content','user_id','post_id'
    ];
protected $primaryKey='id';
protected $table='comments';

    
public function post(){

	return $this->belongsTo('Post');
}
    public function users()
    {
        return $this->hasMany('User');
    }
}
