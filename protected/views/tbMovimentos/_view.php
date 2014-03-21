<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_movimento')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_movimento), array('view', 'id' => $data->id_movimento)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('conta_deb')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->contaDeb)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('conta_cred')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->contaCred)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('entidade')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->entidade0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('liquidada')); ?>:
	<?php echo GxHtml::encode($data->liquidada); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('data')); ?>:
	<?php echo GxHtml::encode($data->data); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('foto')); ?>:
	<?php echo GxHtml::encode($data->foto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo_desp')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tipoDesp)); ?>
	<br />
	*/ ?>

</div>