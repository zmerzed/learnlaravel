<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{	
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
        'user_id'
    ];

    protected $dates = ['published_at'];

    public function scopePublish($query) {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublish($query) {
    	$query->where('published_at', '>=', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    // an article belongs to a user
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
