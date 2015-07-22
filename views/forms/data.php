<?php
$this->title = "Workout Application";
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
if(isset($_GET['del'])){
	?>
	<script type="text/javascript">
location.href = "/";
</script>
<?php
} else if(isset($_GET['edit'])){


?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($forms, 'date')
    ->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd',
])
    ?>
    <?= $form->field($forms, 'name') ?>
    <?= $form->field($forms, 'time') ?>
    <?= $form->field($forms, 'feeling') ?>

       <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); }
?>

