<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_agenda_mov'); ?>
		<?php echo $form->textField($model, 'id_agenda_mov'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'valor'); ?>
		<?php echo $form->textField($model, 'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'prim_data'); ?>
		<?php echo $form->textField($model, 'prim_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'conta_deb'); ?>
		<?php echo $form->dropDownList($model, 'conta_deb', GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'conta_cred'); ?>
		<?php echo $form->dropDownList($model, 'conta_cred', GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'entidade'); ?>
		<?php echo $form->dropDownList($model, 'entidade', GxHtml::listDataEx(TbEntidade::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'activo'); ?>
		<?php echo $form->dropDownList($model, 'activo', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'repeticao'); ?>
		<?php echo $form->dropDownList($model, 'repeticao', GxHtml::listDataEx(TbRepeticao::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ultima_cobranca'); ?>
		<?php echo $form->textField($model, 'ultima_cobranca'); ?>
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
