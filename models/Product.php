<?php

namespace app\models;

use yii\base\Model;

class Product extends Model
{
    public $id;
    public $name;
    public $category;
    public $price;

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Product Name',
            'price' => 'Product Price',
        ];
    }
}
