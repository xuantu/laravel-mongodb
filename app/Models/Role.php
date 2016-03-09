<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/9/16
 * Time: 14:37
 */

namespace CMS\Models;


use Zizaco\Entrust\EntrustRole;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Role extends Eloquent
{
    protected $collection = 'roles';
}