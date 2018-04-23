<?php
$this->breadcrumbs=array(
	'Blog Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List BlogPost'),'url'=>array('index')),
	array('label'=>Yii::t('translate', 'Create BlogPost'),'url'=>array('create')),
	array('label'=>Yii::t('translate', 'View BlogPost'),'url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Update BlogPost'). ' "'.$model->title.'"'; ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>