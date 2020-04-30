<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Billing;
use app\models\Users;



class BillingController extends Controller {

    public function actionBilling() {


        $query = new \yii\db\Query;
        $query->select('*')
            ->from('`billing`')
            ->leftJoin('`users`', '`users`.`id` = `billing`. `id_user`')
            ->orderBy(['payment' => SORT_DESC]);

            $command = $query->createCommand();
            $res = $command->queryAll();

            //print_r($res);

            return $this->render('billing', compact('res'));
            
    }

}

