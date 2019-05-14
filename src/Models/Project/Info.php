<?php

namespace iPremium\Alaska\Models\Project;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'project_list';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

}
