<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name'
    ];

    public function candidates() {
        $this->hasMany(Candidate::class);
    }
}
