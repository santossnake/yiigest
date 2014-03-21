<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_despesa_carro'); ?>
		<?php echo $form->textField($model, 'id_despesa_carro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tipo_desp'); ?>
		<?php echo $form->dropDownList($model, 'tipo_desp', GxHtml::listDataEx(TbTipoDesp::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'movimento'); ?>
		<?php echo $form->dropDownList($model, 'movimento', GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'kms'); ?>
		<?php echo $form->textField($model, 'kms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'carro'); ?>
		<?php echo $form->dropDownList($model, 'carro', GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lt_combust'); ?>
		<?php echo $form->textField($model, 'lt_combust'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'preco_lt'); ?>
		<?php echo $form->textField($model, 'preco_lt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
