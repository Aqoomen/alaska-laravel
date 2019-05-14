<?php
namespace iPremium\Alaska\Models;

use Illuminate\Database\Eloquent\Model;
use iPremium\Alaska\Models\Blog\Category;


class Post extends Model
{

	  protected $table = 'blog_post';

    protected $dates = ['created_at', 'updated_at', 'published_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function categories(){
    	return $this->belongsToMany(Category::class, 'blog_article_category');
    }



}
