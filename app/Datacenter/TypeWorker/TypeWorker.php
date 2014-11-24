<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 13:57
 */

namespace Datacenter\TypeWorker;

use Datacenter\Base\BaseModel;

class TypeWorker extends BaseModel  {
    protected $fillable = ['description','salary'];
    protected $table = 'typesworkers';
} 