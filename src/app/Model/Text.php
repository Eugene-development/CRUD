<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $guarded = [];

    protected $table = 'text';


    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function head()
    {
        return $this->belongsTo(Head::class);
    }
    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
