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
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array('category_id' => array('type' => 'INTEGER','unsigned' => TRUE,'default' => NULL)));
		$this->dbforge->add_field(array('title' => array('type' => 'VARCHAR','constraint' => '255')));
		$this->dbforge->add_field(array('slug' => array('type' => 'VARCHAR','constraint' => '255','unique' => TRUE)));
		$this->dbforge->add_field(array('excerpt' => array('type' => 'TEXT')));
		$this->dbforge->add_field(array('body' => array('type' => 'LONGTEXT','null' => NULL)));
		$this->dbforge->add_field(array('on_top' => array('type' => 'TINYINT','default' => 0)));
		$this->dbforge->add_field(array('hot' => array('type' => 'TINYINT','default' => 0)));
		$this->dbforge->add_field(array('IMAGE' => array('type' => 'VARCHAR','constraint' => '255','null' => NULL)));
		// $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE SET NULL');
		$this->dbforge->add_foreign_key(array('field' => 'category_id','foreign_table' => 'categories','foreign_field' => 'id','delete' => 'SET NULL','update' => 'CASCADE'));
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);

		$this->load->model('post_model');
        $this->post_model->insert_dummy();
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>