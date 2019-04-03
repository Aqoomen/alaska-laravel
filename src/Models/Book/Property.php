<?php

namespace iPremium\Alaska\Models\Book;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use iPremium\Alaska\Models\Book\PropertyType;
use iPremium\Alaska\Models\Book\Type;

class Property extends Model
{

    protected $table = 'book_properties';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(PropertyType::class, "type_id", "id");
    }

    public function book()
    {
        return $this->hasOne(Type::class, "book_id", "id");
    }

}
