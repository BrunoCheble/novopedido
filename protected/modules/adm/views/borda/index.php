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

        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'label' => 'Gerenciar preços',
            'url' => array('tamanhoBorda/saveAll'),
            'type' => 'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size' => 'null,', // null, 'large', 'small' or 'mini'
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
                'descricao',
                array(
                    'name' => 'tipo_sabor',
                    'filter' => $arrayTipoSabor,
                    'value' => 'TipoSabor::getDescricaoTipoSabor($data->tipo_sabor)'
                ),
                array(
                    'header' => 'Preços por tamanho',
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->qtdTamanhoBorda." tamanho(s) cadastrados",array("tamanhoBorda/index","TamanhoBorda[borda_id]"=>$data->id))',
                ),
                array(
                    'name' => 'ativa',
                    'filter' => array(0 => "Não", 1 => "Sim"),
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->ativa ? "Desativar" : "Ativar",array("updateStatus","id"=>$data->id),array("title"=>"Ativar / Desativar"))',
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
