<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-seguros-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'carro'); ?>
		<?php echo $form->dropDownList($model, 'carro', GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'carro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'num_seguro'); ?>
		<?php echo $form->textField($model, 'num_seguro', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'num_seguro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_inicio'); ?>
		<?php echo $form->textField($model, 'data_inicio'); ?>
		<?php echo $form->error($model,'data_inicio'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_fim'); ?>
		<?php echo $form->textField($model, 'data_fim'); ?>
		<?php echo $form->error($model,'data_fim'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model, 'valor', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'valor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'repeticao'); ?>
		<?php echo $form->dropDownList($model, 'repeticao', GxHtml::listDataEx(TbRepeticao::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'repeticao'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbCarroses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbCarroses', GxHtml::encodeEx(GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->