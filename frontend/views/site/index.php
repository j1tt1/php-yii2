<?php
/* @var $this yii\web\View */
$this->title = 'John Application Yii2';
?>
<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>">ไปที่ test1</a><br />

<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'John','lname'=>'Noonung']);
?>
<a href="<?=$route2?>">ไปที่ test2</a><br />