<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['client_id', 'user_id', 'name', 'content', 'limit_date'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
