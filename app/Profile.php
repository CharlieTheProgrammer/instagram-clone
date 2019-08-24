<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        // Behind the scenes, Eloquent uses the class name followed by '_id'
        // to create the relationship. Be sure to use that convention to take
        // advantage of this. Model name + _id

        // There are ways to override this by passing addition params below.
        return $this->belongsTo(User::class);
    }
}
