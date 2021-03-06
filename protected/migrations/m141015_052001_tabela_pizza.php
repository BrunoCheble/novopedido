<?php

class m141015_052001_tabela_pizza extends CDbMigration
{
	public $table = 'usuarios';
        
	public function safeUp()
	{
            $this->createTable($this->table, array(
                'id'            => 'pk',
                'email'         => 'varchar(255) NOT NULL',
                'senha'         => 'varchar(255) NOT NULL',
                'sal'           => 'varchar(255) NOT NULL',
                'ultimo_acesso' => 'timestamp default now()',
                'cliente_id'    => 'tinyint(1) NOT NULL',
                'excluido'      => 'tinyint(1) NOT NULL',
            ));
	}

	public function safeDown()
	{
            $this->dropTable($this->table);
	}
}