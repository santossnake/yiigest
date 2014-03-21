<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_user')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_user), array('view', 'id' => $data->id_user)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NIF')); ?>:
	<?php echo GxHtml::encode($data->NIF); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
	<?php echo GxHtml::encode($data->user); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pw')); ?>:
	<?php echo GxHtml::encode($data->pw); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_nasc')); ?>:
	<?php echo GxHtml::encode($data->data_nasc); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />

</div>