<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_post_tags_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "post_tags";

	public function up()
	{
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array('post_id' => array('type' => 'INTEGER','unsigned' => TRUE,'default' => NULL)));
		$this->dbforge->add_foreign_key(array('field' => 'post_id','foreign_table' => 'posts','foreign_field' => 'id','delete' => 'SET NULL','update' => 'CASCADE'));
		$this->dbforge->add_field(array('tag_id' => array('type' => 'INTEGER','unsigned' => TRUE,'default' => NULL)));
		$this->dbforge->add_foreign_key(array('field' => 'tag_id','foreign_table' => 'tags','foreign_field' => 'id','delete' => 'SET NULL','update' => 'CASCADE'));
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);

		$this->load->model('post_tags_model');
        $this->post_tags_model->insert_dummy();
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>