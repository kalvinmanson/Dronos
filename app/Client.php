<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'name', 'content'];

    public function fields()
    {
        return $this->hasMany('App\Field');
    }
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
