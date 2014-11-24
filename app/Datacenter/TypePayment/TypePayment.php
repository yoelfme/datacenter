<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 13:53
 */
namespace Datacenter\TypePayment;

use Datacenter\Base\BaseModel;

class TypePayment extends BaseModel {
    protected $fillable = ['description','income'];
    protected $table = 'typespayments';
} 