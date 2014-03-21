<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-despesas-carros-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo_desp'); ?>
		<?php echo $form->dropDownList($model, 'tipo_desp', GxHtml::listDataEx(TbTipoDesp::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tipo_desp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'movimento'); ?>
		<?php echo $form->dropDownList($model, 'movimento', GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'movimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data',
			'value' => $model->data,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kms'); ?>
		<?php echo $form->textField($model, 'kms'); ?>
		<?php echo $form->error($model,'kms'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'carro'); ?>
		<?php echo $form->dropDownList($model, 'carro', GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'carro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lt_combust'); ?>
		<?php echo $form->textField($model, 'lt_combust'); ?>
		<?php echo $form->error($model,'lt_combust'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'preco_lt'); ?>
		<?php echo $form->textField($model, 'preco_lt'); ?>
		<?php echo $form->error($model,'preco_lt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->