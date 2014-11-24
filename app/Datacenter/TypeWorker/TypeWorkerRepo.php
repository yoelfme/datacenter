<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 14:05
 */

namespace Datacenter\TypeWorker;


use Datacenter\Base\BaseRepo;

class TypeWorkerRepo extends BaseRepo {
    public function getModel()
    {
        return new TypeWorker();
    }
} 