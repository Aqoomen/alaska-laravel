<?php
namespace iPremium\Alaska\Models;

use Illuminate\Database\Eloquent\Model;
use iPremium\Alaska\Models\Blog\Post;

class Category extends Model
{
  	protected $table = 'blog_categories';

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = true;

    protected $hidden = [];

    protected $guarded = [];

    public function articles()
    {
    	return $this->belongsToMany(Post::class, 'blog_article_category');
    }

}
