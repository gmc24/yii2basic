<?php
namespace app\components;

use yii\base\Component;

class TestService extends Component
{
    public $var = 'default';

    public function run()
    {
        return $this->var;
    }
}