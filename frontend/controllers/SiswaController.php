<?php

namespace frontend\controllers;

use yii;
use Yii as GlobalYii;
use yii\web\Controller;

class SiswaController extends Controller
{
    public function actionIndex()
    {
        echo "<p>ini URL : <strong>" . Yii::$app ->request->absoluteUrl . "</strong></p>";
        echo "<p><strong>Ini adalah URL DEFAULT</strong></p>";
    }
        public function actionView($id)
        {
            echo "<p>ini URL : <strong>" . Yii::$app ->request->absoluteUrl . "</strong></p>";
            echo "<p><siswa dengan no ID: <strong>$id</strong>";

        }
}
