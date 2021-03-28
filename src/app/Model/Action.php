<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $guarded = [];

    protected $table = 'nvg_action';

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
