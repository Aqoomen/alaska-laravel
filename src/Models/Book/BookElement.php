<?php

namespace Aqoomen\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class BookElement extends Model
{

    public function section()
    {
        return $this->hasMany('App\Models\Book\BookSection', "section_id", "id");
    }

    public function price()
    {
        return $this->hasMany('App\Models\Shop\Price', "product_id", "id");
    }
}
