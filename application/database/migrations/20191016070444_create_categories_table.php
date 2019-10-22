<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_categories_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "categories";

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INTEGER',
					'auto_increment' => TRUE,
				),
				'parent_id' => array(
					'type' => 'INTEGER',
					'unsigned' => TRUE,
					'default' => NULL,
				),
				'title' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
				),
				'slug' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'unique' => TRUE,
				),
			)
		);
		$this->dbforge->timestamps();

		$this->dbforge->add_key('id', TRUE);
		// $this->dbforge->add_field('CONSTRAINT FOREIGN KEY `fk_categories_parent_id` (parent_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE SET NULL');
		$this->dbforge->add_foreign_key(array(
				'field' => 'parent_id',
				'foreign_table' => 'categories',
				'foreign_field' => 'id',
				'delete' => 'SET NULL',
				'update' => 'CASCADE',
			)
		);
		$this->dbforge->create_table($this->_table_name, TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>