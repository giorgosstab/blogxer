<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_social_media_table extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "social_media";

	public function up()
	{
		$this->dbforge->add_field('id');
		$this->dbforge->timestamps();
		$this->dbforge->create_table($this->_table_name, TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>