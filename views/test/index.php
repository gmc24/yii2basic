<?php
/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'TestPage';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Used method</h1>
<p><?=$cntnt?></p>

<h2>Category: <?=$model->category;?></h2>
<h3>Product</h3>
<p><?=yii\widgets\DetailView::widget(['model'=>$model]);?></p>

