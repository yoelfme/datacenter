<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 14:04
 */

namespace Datacenter\TypePayment;


use Datacenter\Base\BaseRepo;

class TypePaymentRepo extends BaseRepo {
    public function getModel()
    {
        return new TypePayment();
    }
} 