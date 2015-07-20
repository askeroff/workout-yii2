<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Forms;
use app\models\Exercise;

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
     $exercise  = new Exercise();

     #Добавление упражнения к текущему дню
     if($exercise->load(Yii::$app->request->post()) && $exercise->validate()){
        $exercise->p_id = $id; //айди для опознания к какому дню упражнение
        $exercise->save();

        return $this->render('day', [
        'day' => $id, 
        'exercise' => $exercise, 
        'model' => Forms::find()->where(['id' => $id])->one(),
        'exercises' => Exercise::find()->where(['p_id' => $id])->all()
        ]);
     }

	 return $this->render('day', [
        'day' => $id, 
        'exercise' => $exercise, 
        'model' => Forms::find()->where(['id' => $id])->one(),
        'exercises' => Exercise::find()->where(['p_id' => $id])->all()
        ]);
	}



}

?>
