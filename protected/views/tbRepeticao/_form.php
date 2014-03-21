<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-repeticao-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'descricao'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbAgendaMovs')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbAgendaMovs', GxHtml::encodeEx(GxHtml::listDataEx(TbAgendaMov::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbSeguroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbSeguroses', GxHtml::encodeEx(GxHtml::listDataEx(TbSeguros::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->