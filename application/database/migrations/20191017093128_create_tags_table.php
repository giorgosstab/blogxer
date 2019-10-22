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
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array('title' => array('type' => 'VARCHAR','constraint' => '255','unique' => TRUE)));
		$this->dbforge->add_field(array('slug' => array('type' => 'VARCHAR','constraint' => '255','unique' => TRUE)));
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);

		$this->load->model('tag_model');
        $this->tag_model->insert_dummy();
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>