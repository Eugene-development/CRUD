<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $guarded = [];

    protected $table = 'seo';

    public function tagable()
    {
        return $this->morphTo();
    }

}
