<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_posts_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "posts";

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INTEGER',
					'auto_increment' => TRUE,
				),
				'category_id' => array(
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
				'excerpt' => array(
					'type' => 'TEXT',
				),
				'body' => array(
					'type' => 'LONGTEXT',
					'null' => NULL,
				),
				'image' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => NULL,
				),
			)
		);
		$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

		$this->dbforge->add_key('id', TRUE);
		// $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE SET NULL');
		$this->dbforge->add_foreign_key(array(
				'field' => 'category_id',
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