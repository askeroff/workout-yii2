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


<?php 
if(count($exercises)) {
?>
<h1 class="text-center">Упражнения</h1>

<div class="container exercises">
<div class="row exercises-titles">
	<div class="col-md-4">
		Упражнения: 
	</div>
	<div class="col-md-4">
		Повторения: 
	</div>
	<div class="col-md-4">
		Подходы: 
	</div>
	</div>

<?php
foreach ($exercises as $ex ) {
?>


<div class="row">
	<div class="col-md-4">
		 <?= $ex->exercise ?>
	</div>
	<div class="col-md-4">
		 <?= $ex->reps ?>
	</div>
	<div class="col-md-4">
		 <?= $ex->sets ?>
	</div>
	</div>

<?php
}
?>

</div>

<?php }?>

<h1 class="text-center">Добавить упражнение</h1>
<?php $exerciseForm = ActiveForm::begin(); ?>
    
    <?= $exerciseForm->field($exercise, 'exercise') ?>
    <?= $exerciseForm->field($exercise, 'reps') ?>
    <?= $exerciseForm->field($exercise, 'sets') ?>

     <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>



