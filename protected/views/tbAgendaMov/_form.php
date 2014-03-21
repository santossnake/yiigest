<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-agenda-mov-form',
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
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model, 'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'prim_data'); ?>
		<?php echo $form->textField($model, 'prim_data'); ?>
		<?php echo $form->error($model,'prim_data'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'conta_deb'); ?>
		<?php echo $form->dropDownList($model, 'conta_deb', GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'conta_deb'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'conta_cred'); ?>
		<?php echo $form->dropDownList($model, 'conta_cred', GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'conta_cred'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'entidade'); ?>
		<?php echo $form->dropDownList($model, 'entidade', GxHtml::listDataEx(TbEntidade::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'entidade'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model, 'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'repeticao'); ?>
		<?php echo $form->dropDownList($model, 'repeticao', GxHtml::listDataEx(TbRepeticao::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'repeticao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ultima_cobranca'); ?>
		<?php echo $form->textField($model, 'ultima_cobranca'); ?>
		<?php echo $form->error($model,'ultima_cobranca'); ?>
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