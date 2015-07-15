<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Forms;

class FormsController extends Controller {

 public function actionDayentry() {

    $model = new Forms();

    if($model->load(Yii::$app->request->post()) && $model->validate()) {
        //$model->date = strtotime($model->date);
        $model->save();
        return $this->render('dayconfirm', ['model' => $model]);
    } else {
        return $this->render('dayentry', ['model' => $model]);
    }

}

	public function actionDay($id){
	 $id = $_GET['id'];
	 return $this->render('day', ['day' => $id, 'model' => Forms::find()
    ->where(['id' => $id])->one()]);
	}



}

?>
