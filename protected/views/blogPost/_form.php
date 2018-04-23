<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'blog-post-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

        <!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'title', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->checkboxRow($model, 'active'); ?>

<div class="clear"></div>

<?php
echo $form->labelEx($model, 'introduction', array('rows' => 6, 'cols' => 100));
$this->widget('application.extensions.eckeditor.ECKEditor', array(
    'model' => $model,
    'attribute' => 'introduction',
));
?>

<div class="clear"><br></div>

<?php
echo $form->labelEx($model, 'details', array('rows' => 6, 'cols' => 100));
$this->widget('application.extensions.eckeditor.ECKEditor', array(
    'model' => $model,
    'attribute' => 'details',
));
?>

<div class="clear"><br></div>

<?php
echo $form->fileFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 255));

if ($model->isNewRecord != '1' and $model->image != '') {
    echo "<p class='text-center'>" . Chtml::image(Yii::app()->baseUrl . '/media/blog/' . $model->image, 'image', array('width' => 200)) . "</p>";
}
?>

<div class="form-actions clear">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
