<?php

namespace iPremium\Alaska\Models\Shop;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

}
