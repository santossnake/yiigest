<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_seguro'); ?>
		<?php echo $form->textField($model, 'id_seguro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'carro'); ?>
		<?php echo $form->dropDownList($model, 'carro', GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'num_seguro'); ?>
		<?php echo $form->textField($model, 'num_seguro', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_inicio'); ?>
		<?php echo $form->textField($model, 'data_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_fim'); ?>
		<?php echo $form->textField($model, 'data_fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'valor'); ?>
		<?php echo $form->textField($model, 'valor', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'repeticao'); ?>
		<?php echo $form->dropDownList($model, 'repeticao', GxHtml::listDataEx(TbRepeticao::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
