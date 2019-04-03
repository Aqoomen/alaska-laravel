<?php

namespace iPremium\Alaska\Models\Page;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{

    protected $table = 'pages';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];


}
