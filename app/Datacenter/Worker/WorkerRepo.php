<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 14:06
 */

namespace Datacenter\Worker;


use Datacenter\Base\BaseRepo;

class WorkerRepo extends BaseRepo {
    public function getModel()
    {
        return new Worker();
    }
} 