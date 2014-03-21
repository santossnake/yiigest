<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_carro')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_carro), array('view', 'id' => $data->id_carro)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('matricula')); ?>:
	<?php echo GxHtml::encode($data->matricula); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('marca')); ?>:
	<?php echo GxHtml::encode($data->marca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('modelo')); ?>:
	<?php echo GxHtml::encode($data->modelo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('km_iniciais')); ?>:
	<?php echo GxHtml::encode($data->km_iniciais); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_matricula')); ?>:
	<?php echo GxHtml::encode($data->data_matricula); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('seguro')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->seguro0)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('combust_inicial')); ?>:
	<?php echo GxHtml::encode($data->combust_inicial); ?>
	<br />
	*/ ?>

</div>