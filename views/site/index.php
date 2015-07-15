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
    </li>
<?php endforeach; ?>
</ul>
 <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>


</div>
