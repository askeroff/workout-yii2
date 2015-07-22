<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Forms;
use app\models\Exercise;

class ExerciseController extends Controller {

public function actionData($id){
	 return $this->render('data', [
        'id' => $id, 
        'exercises' => Exercise::find()->where(['id' => $id])->one()->delete()
        ]);
}

}

?>