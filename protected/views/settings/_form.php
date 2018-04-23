<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'settings-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
        ));
?>

        <!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'name', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'phone', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'address', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'twitter', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'facebook', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'linkedin', array('class' => 'span9', 'maxlength' => 255)); ?>

<?php echo $form->textAreaRow($model, 'footer', array('class' => 'span9')); ?>

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
