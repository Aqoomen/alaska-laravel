<?php

namespace iPremium\Alaska\Models\Menu;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{

    protected $table = 'menus';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];


}
