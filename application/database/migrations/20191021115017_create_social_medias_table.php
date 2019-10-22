<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_social_medias_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "social_medias";

	public function up()
	{
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array('title' => array('type' => 'VARCHAR','constraint' => '255')));
		$this->dbforge->add_field(array('url' => array('type' => 'VARCHAR','constraint' => '255')));
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);

		$this->load->model('social_media_model');
        $this->social_media_model->insert_dummy();
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>