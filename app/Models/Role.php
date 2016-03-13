<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/9/16
 * Time: 14:37
 */

namespace CMS\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    protected $collection = 'roles';

    protected $fillable = array('_method', '_token', 'name', 'display_name', 'description');
}