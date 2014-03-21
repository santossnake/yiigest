<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-bancos-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'nome'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'inicio_nib'); ?>
		<?php echo $form->textField($model, 'inicio_nib', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'inicio_nib'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbContases')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbContases', GxHtml::encodeEx(GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->