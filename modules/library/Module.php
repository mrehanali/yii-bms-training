<?php

namespace app\modules\library;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\library\controllers';

    public $defaultRoute = 'index';

    public function init()
    {
        parent::init();
    }
}
