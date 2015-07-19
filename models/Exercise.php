<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Exercise extends ActiveRecord {

	public static function tableName(){
		return 'exercises';
	}

	public function rules(){
		return [
       ['exercise', 'required', 'message' => 'Поле обязательно'],
       ['reps', 'required', 'message' => 'Поле обязательно'],
       ['sets', 'required', 'message' => 'Поле обязательно'],
        ];
	}

	    public function attributeLabels(){
    	return array('exercise' => 'Вид упражнения' ,
    				 'reps' => 'Количество повторений',
              		 'sets' => 'Количество подходов',
   
    		);
    }

}

?>