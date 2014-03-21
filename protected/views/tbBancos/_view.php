<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_banco')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_banco), array('view', 'id' => $data->id_banco)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('inicio_nib')); ?>:
	<?php echo GxHtml::encode($data->inicio_nib); ?>
	<br />

</div>