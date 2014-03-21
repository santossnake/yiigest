<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-users-form',
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
		<?php echo $form->labelEx($model,'NIF'); ?>
		<?php echo $form->textField($model, 'NIF', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'NIF'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model, 'user', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pw'); ?>
		<?php echo $form->textField($model, 'pw', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'pw'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_nasc'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data_nasc',
			'value' => $model->data_nasc,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data_nasc'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbAgendaMovs')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbAgendaMovs', GxHtml::encodeEx(GxHtml::listDataEx(TbAgendaMov::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbContases')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbContases', GxHtml::encodeEx(GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbDespesasCarroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbDespesasCarroses', GxHtml::encodeEx(GxHtml::listDataEx(TbDespesasCarros::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbMovimentoses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbMovimentoses', GxHtml::encodeEx(GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbSeguroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbSeguroses', GxHtml::encodeEx(GxHtml::listDataEx(TbSeguros::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->