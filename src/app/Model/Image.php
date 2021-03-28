<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    protected $table = 'images';

    public function product ()
    {
        return $this->belongsTo(Product::class);
    }
}
