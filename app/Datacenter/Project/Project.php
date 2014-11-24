<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 13:52
 */

namespace Datacenter\Project;

use Datacenter\Base\BaseModel;
use Illuminate\Support\Facades\DB;

class Project extends BaseModel {
    protected $fillable = ['description','observation','attendant'];
    protected $table = 'projects';

    public function getGraphicProjects()
    {
        $datos =  DB::select(DB::raw('SELECT p.description label, COUNT(w.id) data
                                    FROM projects p
                                    INNER JOIN workers w ON w.idproject = p.id
                                    GROUP BY p.description
                                    ORDER BY data;'));

        return $datos;
    }

    public function getGraphicProjects2()
    {
        $datos =  DB::select(DB::raw('SELECT tw.description label, COUNT(w.id) data
                                        FROM typesworkers tw
                                        INNER JOIN workers w ON w.idtypeworker = tw.id
                                        GROUP BY tw.description
                                        ORDER BY data DESC;'));

        return $datos;
    }


} 