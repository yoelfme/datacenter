<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 14:03
 */
namespace Datacenter\Worker;

use Datacenter\Base\BaseModel;

class Worker extends BaseModel {
    protected $fillable = ['idtypeworker','idproject','first_name','last_name','identification'];
    protected $table = 'workers';
} 