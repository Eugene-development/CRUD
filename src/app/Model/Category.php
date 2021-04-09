<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected $table = 'nvg_category';

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function text()
    {
        return $this->hasMany(Text::class);
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'tagable');
    }
}
