<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
class salesController extends Controller
{
    public function actionTotalSale()
    {
        echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong<>/p>";
    }
}

 