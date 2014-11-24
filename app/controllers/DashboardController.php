<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 17/11/14
 * Time: 23:53
 */

use Datacenter\Payment\PaymentRepo;
use Datacenter\Project\ProjectRepo;
use Datacenter\TypePayment\TypePaymentRepo;
use Datacenter\TypeWorker\TypeWorkerRepo;
use Datacenter\Worker\WorkerRepo;

class DashboardController extends BaseController {
    // Variables
    protected   $projectRepo,
                $paymentRepo,
                $typePaymentRepo,
                $typeWorkerRepo,
                $workerRepo;

    // Constructor
    public function __construct(PaymentRepo $paymentRepo,ProjectRepo $projectRepo,TypePaymentRepo $typePaymentRepo,TypeWorkerRepo $typeWorkerRepo,WorkerRepo $workerRepo )
    {
        $this->paymentRepo = $paymentRepo;
        $this->projectRepo = $projectRepo;
        $this->typePaymentRepo  = $typePaymentRepo;
        $this->typeWorkerRepo   = $typeWorkerRepo;
        $this->workerRepo = $workerRepo;
    }


    public function showDashboard()
    {
        return View::make('home');
    }

    public function makeDashboard()
    {
        $repuesta = array();

        $respuesta['projects'] = $this->projectRepo->getModel()->getGraphicProjects();
        $respuesta['projects2'] = $this->projectRepo->getModel()->getGraphicProjects2();
        $respuesta['incomes'] = $this->paymentRepo->getModel()->getGraphicIncomes();
        $respuesta['noincomes'] = $this->paymentRepo->getModel()->getGraphicNoIncomes();
//        $respuesta['typePayments'] = $this->typePaymentRepo->getModel()->getGraphicTypePayments();
//        $respuesta['typeWorkers'] = $this->typeWorkerRepo->getModel()->getGraphicTypeWorkers();
//        $respuesta['workers'] = $this->workerRepo->getModel()->getGraphicWorkers();

        return $respuesta;
    }
} 