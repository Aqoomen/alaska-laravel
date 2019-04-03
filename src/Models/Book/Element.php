<?php

namespace iPremium\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use iPremium\Alaska\Models\Book\Section;
use iPremium\Alaska\Models\Shop\Price;

class Element extends Model
{

    protected $table = 'book_elements';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

    public function section()
    {
        return $this->hasMany(Section::class, "section_id", "id");
    }

    public function price()
    {
        return $this->hasMany(Price::class, "product_id", "id");
    }
}
