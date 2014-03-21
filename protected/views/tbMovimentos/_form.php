<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-movimentos-form',
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
		<?php echo $form->labelEx($model,'liquidada'); ?>
		<?php echo $form->checkBox($model, 'liquidada'); ?>
		<?php echo $form->error($model,'liquidada'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model, 'data'); ?>
		<?php echo $form->error($model,'data'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textArea($model, 'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo_desp'); ?>
		<?php echo $form->dropDownList($model, 'tipo_desp', GxHtml::listDataEx(TbTipoDesp::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tipo_desp'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbDespesasCarroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbDespesasCarroses', GxHtml::encodeEx(GxHtml::listDataEx(TbDespesasCarros::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->