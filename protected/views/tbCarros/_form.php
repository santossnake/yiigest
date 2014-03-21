<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-carros-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model, 'matricula', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'matricula'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model, 'marca', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'marca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model, 'modelo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'modelo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'km_iniciais'); ?>
		<?php echo $form->textField($model, 'km_iniciais'); ?>
		<?php echo $form->error($model,'km_iniciais'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_matricula'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data_matricula',
			'value' => $model->data_matricula,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data_matricula'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'seguro'); ?>
		<?php echo $form->dropDownList($model, 'seguro', GxHtml::listDataEx(TbSeguros::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'seguro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'combust_inicial'); ?>
		<?php echo $form->textField($model, 'combust_inicial'); ?>
		<?php echo $form->error($model,'combust_inicial'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbDespesasCarroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbDespesasCarroses', GxHtml::encodeEx(GxHtml::listDataEx(TbDespesasCarros::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbSeguroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbSeguroses', GxHtml::encodeEx(GxHtml::listDataEx(TbSeguros::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->