<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.06.2018
 * Time: 23:07
 */

namespace app\controllers;


use app\components\TestService;
use app\models\Product;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {

//        $new = new TestService(['var'=>'i324ug5j2345hgv']);
//        $cntnt = $new->run()."<br>";
        $cntnt =  \Yii::$app->test->run();

        $cntnt .= "<br>".__METHOD__;
//        $cntnt = __METHOD__;
        $my_model = new Product();
/*        $my_model->id = 1;
        $my_model->name = 'My First Product';
        $my_model->category = 'GOODS';
        $my_model->price = 300;*/
//        return $this->renderContent($content);
        return $this->render('index', [
            'cntnt' => $cntnt,
            'model' => $my_model
        ]);
    }
}