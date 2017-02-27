<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['user_id', 'client_id', 'project_id', 'category', 'name', 'content'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
