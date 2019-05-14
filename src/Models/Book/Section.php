<?php

namespace iPremium\Alaska\Models\Book;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'book_sections';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];
}
