<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_despesa_carro')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_despesa_carro), array('view', 'id' => $data->id_despesa_carro)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo_desp')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tipoDesp)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('movimento')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->movimento0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data')); ?>:
	<?php echo GxHtml::encode($data->data); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kms')); ?>:
	<?php echo GxHtml::encode($data->kms); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('carro')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->carro0)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('lt_combust')); ?>:
	<?php echo GxHtml::encode($data->lt_combust); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('preco_lt')); ?>:
	<?php echo GxHtml::encode($data->preco_lt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user0)); ?>
	<br />
	*/ ?>

</div>