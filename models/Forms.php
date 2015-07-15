<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Forms extends ActiveRecord
{

	public static function tableName(){
		return 'days';
	}

	public function rules()
    {
        return [
       ['date', 'required', 'message' => 'Поле обязательно'],
       ['name', 'required', 'message' => 'Поле обязательно'],
       ['time', 'required', 'message' => 'Поле обязательно'],
       ['feeling', 'required', 'message' => 'Поле обязательно'],

        ];
    }

    public function attributeLabels(){
    	return array('date' => 'Дата занятий' ,
    				  'name' => 'Группа мышц',
              'time' => 'Время, потраченное на занятие (мин.)',
    				  'feeling' => 'Самочувствие после тренировки',
    		);
    }


}
