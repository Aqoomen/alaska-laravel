<?php

namespace iPremium\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'book_types';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];
}
