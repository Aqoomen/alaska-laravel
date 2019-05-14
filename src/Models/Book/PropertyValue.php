<?php

namespace iPremium\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use iPremium\Alaska\Models\Book\Element;
use iPremium\Alaska\Models\Book\Property;

class PropertyValue extends Model
{

    protected $table = 'book_property_values';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

    public function product()
    {
        return $this->hasOne(Element::class, "element_id", "id");
    }

    public function book()
    {
        return $this->hasOne(Property::class, "property_id", "id");
    }


    public static function getList($element_id)
    {
        $property_list = self::where("element_id", $element_id)
                            ->join('book_properties', 'book_property_values.property_id', '=', 'book_properties.id')
                            ->get();

        return $property_list;

    }

}
