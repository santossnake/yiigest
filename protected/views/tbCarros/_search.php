<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_carro'); ?>
		<?php echo $form->textField($model, 'id_carro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'matricula'); ?>
		<?php echo $form->textField($model, 'matricula', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'marca'); ?>
		<?php echo $form->textField($model, 'marca', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'modelo'); ?>
		<?php echo $form->textField($model, 'modelo', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'km_iniciais'); ?>
		<?php echo $form->textField($model, 'km_iniciais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_matricula'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model, 'seguro'); ?>
		<?php echo $form->dropDownList($model, 'seguro', GxHtml::listDataEx(TbSeguros::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'combust_inicial'); ?>
		<?php echo $form->textField($model, 'combust_inicial'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
