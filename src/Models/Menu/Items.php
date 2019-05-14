<?php

namespace iPremium\Alaska\Models\Menu;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Items extends Model
{

    protected $table = 'menu_items';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];


}
