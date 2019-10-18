<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_post_tag_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "post_tag";

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INTEGER',
					'auto_increment' => TRUE,
				),
				'post_id' => array(
					'type' => 'INTEGER',
					'unsigned' => TRUE,
					'default' => NULL,
				),
				'tag_id' => array(
					'type' => 'INTEGER',
					'unsigned' => TRUE,
					'default' => NULL,
				),
			)
		);
		$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->add_foreign_key(array(
				'field' => 'post_id',
				'foreign_table' => 'posts',
				'foreign_field' => 'id',
				'delete' => 'SET NULL',
				'update' => 'CASCADE',
			)
		);
		$this->dbforge->add_foreign_key(array(
			'field' => 'tag_id',
			'foreign_table' => 'tags',
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