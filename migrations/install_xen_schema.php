<?php
/**
 *
 * xSensei - xDojo Navbar. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Sir Xiradorn, http://xiradorn.it
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace xiradorn\xdojonavbar\migrations;

class install_xen_schema extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['xiradorn_xen']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		/**
		 * Add data for general config stuff
		 */
		return array(
			array('config.add', array('xiradorn_xen', 1))
		);
	}
}
