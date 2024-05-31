<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;	

Class saleschartcontroller extends Controller
{
	public function actionQuarterly($year)
	{
		echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteURL . "</strong></p>";

		if ($year = "all") {
			echo "Menampilkan semua chart";
		} else if ($year > 1980 && $year <2050) {
			echo "Menampilkan chat tahun $year";
		} else {
			echo "Chat tidak dapat ditampilkan";
		}
	}
}