<?php
namespace iPremium\Alaska\Models;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{

	  protected $table = 'blog';

    protected $dates = ['created_at', 'updated_at', 'published_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];






}
