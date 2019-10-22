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
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array('parent_id' => array('type' => 'INTEGER','unsigned' => TRUE,'default' => NULL)));
		$this->dbforge->add_field(array('title' => array('type' => 'VARCHAR','constraint' => '255')));
		$this->dbforge->add_field(array('slug' => array('type' => 'VARCHAR','constraint' => '255','unique' => TRUE)));
		$this->dbforge->add_foreign_key(array('field' => 'parent_id','foreign_table' => 'categories','foreign_field' => 'id','delete' => 'SET NULL','update' => 'CASCADE'));
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);

		$this->load->model('category_model');
        $this->category_model->insert_dummy();
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>