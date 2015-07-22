<?php
/* @var $this yii\web\View */
$this->title = 'Workout Application';
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<div class="site-index">
    <div class="body-content">
	
	<h1 class="text-center">Ваши тренировки</h1>
<ul class="workout-list">

<?php foreach ($forms as $day): ?>

    <li>
        <a href="http://workout.web/?r=forms/day&id=<?= $day->id ?> ">
        <?= Html::encode("{$day->name} ({$day->date})") ?>:
        <?= $day->feeling ?></a>
       <a style="float: right;" title="Удалить" href="/?r=forms/data&del=yes&id=<?= $day->id ?>">
		<i class="glyphicon glyphicon-remove"></i></a>
		 <a style="float: right;margin-right:10px;" title="Редактировать" href="/?r=forms/data&edit=yes&id=<?= $day->id ?>">
		<i class="glyphicon glyphicon-edit"></i></a>
    </li>
<?php endforeach; ?>

</ul>

 <?= LinkPager::widget(['pagination' => $pagination]) ?>

    </div>


</div>
