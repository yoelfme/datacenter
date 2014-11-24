<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 14:04
 */

namespace Datacenter\Project;


use Datacenter\Base\BaseRepo;

class ProjectRepo extends BaseRepo {

    public function getModel()
    {
        return new Project();
    }
} 