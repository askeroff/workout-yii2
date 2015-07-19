<?php
$this->title = $model->name . " - " . $model->date;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h3 class="day-info"><span style="color:#015B82">Дата:</span> 
<span class="day-info-text"><?= $model->date ?></span> </h3>
<h3 class="day-info"><span style="color:#015B82">Группа мышц:</span> 
<span class="day-info-text"><?= $model->name ?></span></h3>
<h3 class="day-info"><span style="color:#015B82">Время (мин.):</span> 
<span class="day-info-text"><?= $model->time ?></span></h3>
<h3 class="day-info"><span style="color:#015B82">Самочувствие:</span> 
<span class="day-info-text"><?= $model->feeling ?></span> </h3>



<h1 class="text-center">Упражнения</h1>

<?php

?>

<?php $exerciseForm = ActiveForm::begin(); ?>
    
    <?= $exerciseForm->field($exercise, 'exercise') ?>
    <?= $exerciseForm->field($exercise, 'reps') ?>
    <?= $exerciseForm->field($exercise, 'sets') ?>

     <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>



