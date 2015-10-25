<?php

namespace Opencasts;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'url', 'category', 'description', 'user_id'];

    protected function user()
    {
        $this->belongsTo('Opencasts\User');
    }

}
