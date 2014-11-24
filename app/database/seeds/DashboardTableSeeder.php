<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 18/11/14
 * Time: 12:50
 */

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Datacenter\Project\Project;
use Datacenter\TypePayment\TypePayment;
use Datacenter\Payment\Payment;
use Datacenter\TypeWorker\TypeWorker;
use Datacenter\Worker\Worker;

class DashboardTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $this->fillProjects(10,$faker);
        $this->fillTypePayments(10,$faker);
        $this->fillPayments(1250,$faker);
        $this->fillTypeWorkers(10,$faker);
        $this->fillWorkers(1000,$faker);
    }

    public function fillProjects($num = 10,$faker)
    {

        $projects = new Collection();

        for ($i=0;$i<$num;$i++)
        {
            $projects->add(Project::create([
                'description'   => $faker->unique()->company(),
                'observation'   => $faker->unique()->sentence(10),
                'attendant'     => $faker->name
            ]));
        }

        return $projects;
    }

    public function fillTypePayments($num=10,$faker)
    {
        $typespayments = new Collection();

        for ($i=0;$i<$num;$i++)
        {
            $typespayments->add(
                TypePayment::create([
                    'description'   => $faker->unique()->sentence(2),
                    'income'        => $faker->boolean(20)
                ])
            );
        }

        return $typespayments;
    }

    public function fillPayments($num=10,$faker)
    {
        $payments = new Collection();

        for ($i=0;$i<$num;$i++)
        {
            $payments->add(Payment::create([
                'idtypepayment' =>  $faker->numberBetween(1,10),
                'idproject'     =>  $faker->numberBetween(1,10),
                'amount'        =>  $faker->randomFloat(2,100,1000)
            ]));
        }

        return $payments;
    }

    public function fillTypeWorkers($num=10,$faker)
    {
        $typesworkers= new Collection();

        for ($i=0;$i<$num;$i++)
        {
            $typesworkers->add(
                TypeWorker::create([
                    'description'   => $faker->unique()->sentence(2),
                    'salary'        => $faker->randomFloat(2,2000,3000)
                ])
            );
        }

        return $typesworkers;
    }

    public function fillWorkers($num=10,$faker)
    {
        $workers = new Collection();

        for($i=0;$i<$num;$i++)
        {
            $workers->add(Worker::create([
                'idtypeworker'  =>  $faker->numberBetween(1,10),
                'idproject'     =>  $faker->numberBetween(1,10),
                'first_name'    =>  $faker->firstName($gender = null|'male'|'female'),
                'last_name'     =>  $faker->lastName(),
                'identification'=>  $faker->unique()->randomNumber(8)
            ]));
        }

        return $workers;
    }

} 