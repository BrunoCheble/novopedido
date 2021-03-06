<div class="widget">
    <!-- Widget title -->
    <div class="widget-head">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'label' => 'Cadastrar',
            'url' => array('create'),
            'type' => 'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size' => 'mini,', // null, 'large', 'small' or 'mini'
        ));
        ?>
    </div>
    <div class="widget-content">
        <?php
        $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $model->naoExcluido()->search(),
            'filter' => $model,
            'template' => "{items}{pager}{summary}",
            'columns' => array(
                'nome',
		'telefone',
		'celular',
		'bairro',
		'cep',
		'endereco',
		'complemento',
		'numero',
                array(
                    'header' => 'Qtd. de pedidos',
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->usuarios->qtdPedidos." pedido(s)",array("pedido/index","Pedido[usuario_id]"=>$data->usuarios->id))',
                    'htmlOptions' => array('style' => 'width: 150px'),
                ),
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'htmlOptions' => array('style' => 'width: 50px'),
                ),
            ),
        ));
        ?>


    </div>
</div>
