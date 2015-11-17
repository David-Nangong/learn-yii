<?php
/**
 * Created by PhpStorm.
 * User: ysyc
 * Date: 2015/11/16
 * Time: 18:18
 */

namespace app\controllers;

use yii\web\controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller {
    public function actionIndex(){
        $query = country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}