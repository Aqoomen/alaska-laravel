<?php

namespace Aqoomen\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class BookPropertyValue extends Model
{

    public function product()
    {
        return $this->hasOne('App\Models\Book\BookElement', "element_id", "id");
    }

    public function book()
    {
        return $this->hasOne('App\Models\Book\BookProperty', "property_id", "id");
    }


    public static function getPropertyList($element_id)
    {
        $property_list = self::where("element_id", $element_id)
                            ->join('book_properties', 'book_property_values.property_id', '=', 'book_properties.id')
                            ->get();


        return $property_list;

    }

}
