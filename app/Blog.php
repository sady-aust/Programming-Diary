<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable =["category_id","blog_title","blog_short_description","blog_articles","blog_image_direcotry","blog_publication_status"];

}
