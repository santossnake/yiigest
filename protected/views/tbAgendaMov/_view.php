<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_agenda_mov')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_agenda_mov), array('view', 'id' => $data->id_agenda_mov)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('prim_data')); ?>:
	<?php echo GxHtml::encode($data->prim_data); ?>
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
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('activo')); ?>:
	<?php echo GxHtml::encode($data->activo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('repeticao')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->repeticao0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ultima_cobranca')); ?>:
	<?php echo GxHtml::encode($data->ultima_cobranca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user0)); ?>
	<br />
	*/ ?>

</div>