<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['text' ,'user_id' , 'post_id' ,'parent_id'];

    public function reactions(){
        return $this->morphMany('App\Models\Reaction' ,'reactionable' );
    }

}