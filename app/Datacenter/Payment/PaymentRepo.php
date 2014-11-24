<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 13:26
 */

namespace Datacenter\Payment;


use Datacenter\Base\BaseRepo;

class PaymentRepo extends BaseRepo {

    public function getModel()
    {
        return new Payment();
    }
} 