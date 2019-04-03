<?php

namespace iPremium\Alaska\Models\Lead;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
 

class Lead extends Model
{

    protected $table = 'leads';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];


}
