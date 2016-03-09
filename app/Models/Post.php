<?php

namespace CMS\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $collection = 'posts';
}
