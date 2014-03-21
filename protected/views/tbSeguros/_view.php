<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_seguro')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_seguro), array('view', 'id' => $data->id_seguro)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('carro')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->carro0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('num_seguro')); ?>:
	<?php echo GxHtml::encode($data->num_seguro); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_inicio')); ?>:
	<?php echo GxHtml::encode($data->data_inicio); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_fim')); ?>:
	<?php echo GxHtml::encode($data->data_fim); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('repeticao')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->repeticao0)); ?>
	<br />
	*/ ?>

</div>