<?php

namespace Aqoomen\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class BookProperty extends Model
{

    public function type()
    {
        return $this->hasOne('App\Models\Book\BookPropertyType', "type_id", "id");
    }

    public function book()
    {
        return $this->hasOne('App\Models\Book\BookType', "book_id", "id");
    }

}
