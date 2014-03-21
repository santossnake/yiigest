<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-entidade-form',
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

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbAgendaMovs')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbAgendaMovs', GxHtml::encodeEx(GxHtml::listDataEx(TbAgendaMov::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbMovimentoses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbMovimentoses', GxHtml::encodeEx(GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->