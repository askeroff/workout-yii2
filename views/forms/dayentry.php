<?php
$this->title = "Workout entry";
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')
    ->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd',
])
    ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'time') ?>
    <?= $form->field($model, 'feeling') ?>

       <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
