<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/9/16
 * Time: 14:38
 */

namespace CMS\Models;

use Zizaco\Entrust\EntrustPermission;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Permission extends Eloquent
{
    protected $collection = 'permissions';
}