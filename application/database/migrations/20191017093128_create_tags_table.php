<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_tags_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "tags";

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INTEGER',
					'auto_increment' => TRUE,
				),
				'title' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'unique' => TRUE,
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
		$this->dbforge->create_table($this->_table_name, TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>