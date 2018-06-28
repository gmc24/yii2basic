<?php

namespace app\controllers;


use app\components\TestService;
use app\models\Product;
use yii\web\Controller;
use yii\db\Query;

class TestController extends Controller
{
    /**
     * @return string
     */
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

    public function actionInsert()
    {
        \Yii::$app->db->createCommand()->insert('user',[
            'username' => 'Mr.First',
            'name' => 'John',
            'surname' => 'First',
            'password_hash' => sha1('secret'),
            'access_token' => '',
            'auth_key' => '',
            'created_at' => new \yii\db\Expression('NOW()'),
            'updated_at' => '',
        ])
            ->execute();

        \Yii::$app->db->createCommand()->batchInsert('user', ['username','name','surname','password_hash','access_token','auth_key', 'created_at','updated_at'], [
            ['Mr.Second','Bob','Second',sha1('secret_2'),null,null,new \yii\db\Expression('NOW()'),null],
            ['Ms.Third','Ann','Third',sha1('secret_3'),null,null,new \yii\db\Expression('NOW()'),null],
        ])
            ->execute();

        return 'Inserted';
    }

    public function actionSelect()
    {
        $user1 = (new Query()) -> from('user') -> where(['id'=>1]);

        $user2 = (new Query()) -> from('user') -> where(['>','id',1]) -> orderBy('name');
        $user3 = (new Query()) -> from('user');
//        _end($user1->one());
//        _end($user2->all());
        _end($user3->count());
    }
}