<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tb-contas-form',
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
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'NIB'); ?>
		<?php echo $form->textField($model, 'NIB', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'NIB'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_abertura'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data_abertura',
			'value' => $model->data_abertura,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data_abertura'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'banco'); ?>
		<?php echo $form->dropDownList($model, 'banco', GxHtml::listDataEx(TbBancos::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'banco'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->dropDownList($model, 'user', GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cartao'); ?>
		<?php echo $form->textField($model, 'cartao', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'cartao'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tbAgendaMovs')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbAgendaMovs', GxHtml::encodeEx(GxHtml::listDataEx(TbAgendaMov::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbAgendaMovs1')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbAgendaMovs1', GxHtml::encodeEx(GxHtml::listDataEx(TbAgendaMov::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbMovimentoses')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbMovimentoses', GxHtml::encodeEx(GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tbMovimentoses1')); ?></label>
		<?php echo $form->checkBoxList($model, 'tbMovimentoses1', GxHtml::encodeEx(GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->