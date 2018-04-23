<?php
$this->breadcrumbs=array(
	'Blog Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List BlogPost'),'url'=>array('index')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Create BlogPost');?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>