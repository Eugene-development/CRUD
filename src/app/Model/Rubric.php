<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $guarded = [];

    protected $table = 'nvg_rubric';

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function text()
    {
        return$this->hasMany(Text::class);
    }

    public function head()
    {
        return $this->belongsTo(Head::class);
    }

}
