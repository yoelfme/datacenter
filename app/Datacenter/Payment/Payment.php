<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 13:17
 */

namespace Datacenter\Payment;

use Illuminate\Support\Facades\DB;
use Datacenter\Base\BaseModel;

class Payment extends BaseModel {

    protected $fillable = ['idtypepayment','idproject','amount'];
    protected $table = 'payments';

    public function getGraphicIncomes()
    {
        $datos =  DB::select(DB::raw('SELECT tp.description label, SUM(p.amount) data
                                        FROM payments p
                                        INNER JOIN typespayments tp ON tp.id = p.idtypepayment
                                        WHERE tp.income = 1
                                        GROUP BY tp.description
                                        ORDER BY data DESC;'));

        return $datos;
    }

    public function getGraphicNoIncomes()
    {
        $datos =  DB::select(DB::raw('SELECT tp.description label, SUM(p.amount) data
                                        FROM payments p
                                        INNER JOIN typespayments tp ON tp.id = p.idtypepayment
                                        WHERE tp.income = 0
                                        GROUP BY tp.description
                                        ORDER BY data DESC;'));

        return $datos;
    }
} 