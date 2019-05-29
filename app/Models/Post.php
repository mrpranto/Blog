<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected static  function boot()
    {
        parent::boot();

        static::creating(function ($post){
            $post->slug = str_slug($post->title);
        });

    }

    public function category(){

        return $this->belongsTo(Category::class);

    }
}
