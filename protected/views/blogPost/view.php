<?php

$this->breadcrumbs = array(
    'Blog Posts' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => Yii::t('translate', 'List BlogPost'), 'url' => array('index')),
    array('label' => Yii::t('translate', 'Create BlogPost'), 'url' => array('create')),
    array('label' => Yii::t('translate', 'Update BlogPost'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('translate', 'Delete BlogPost'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'View BlogPost') . ' "' . $model->title . '"'; ?>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'title',
        'introduction',
        'details',
        array(
            'name' => 'image',
            'type' => 'raw',
            'value' => CHtml::image(Yii::app()->request->baseUrl . '/media/blog/' . $model->image, $model->title, array('width' => 250)),
        ),
        'active' => array(
            'name' => 'active',
            'value' => $model->active ? 'Active' : 'Inactive'
        ),
    ),
));
?>
