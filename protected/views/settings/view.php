<?php

$this->breadcrumbs = array(
    'Settings' => array('index'),
    $model->name,
);

$this->menu = array(
    //array('label'=>Yii::t('translate', 'List Settings'),'url'=>array('index')),
    //array('label'=>Yii::t('translate', 'Create Settings'),'url'=>array('create')),
    array('label' => Yii::t('translate', 'Update Settings'), 'url' => array('update', 'id' => $model->id)),
        //array('label'=>Yii::t('translate', 'Delete Settings'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'View Settings'); ?>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'email',
        'phone',
        'address',
        'facebook',
        'twitter',
        'linkedin',
        'footer'
    ),
));
?>
