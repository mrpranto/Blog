<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category){
            $category->slug = str_slug($category->name);
        });

    }

    public function posts(){

        return $this->hasMany(Post::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

}
