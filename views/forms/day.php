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

<div class="container exercises">
<div class="row exercises-titles">
	<div class="col-md-6">
		Упражнения: 
	</div>
	<div class="col-md-2">
		Повторения: 
	</div>
	<div class="col-md-2">
		
		Подходы: 
	</div>
	<div class="col-md-2">
		<i style="text-align:right;" class="glyphicon glyphicon-cog"></i>
	</div>
	</div>

<?php
foreach ($exercises as $ex ) {
?>


<div class="row">
	<div class="col-md-6">
		 <?= $ex->exercise ?>
	</div>
	<div class="col-md-2">
		 <?= $ex->reps ?>
	</div>
	<div class="col-md-2">
		 <?= $ex->sets ?>
	</div>
	<div class="col-md-2 settings">
		<span>
		<a href="/?r=exercise/data&id=<?= $ex->id ?> ">
		<i class="glyphicon glyphicon-remove"></i></a>
		</span>
		<span>
			<i class="glyphicon glyphicon-edit"></i>
		</span>
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



