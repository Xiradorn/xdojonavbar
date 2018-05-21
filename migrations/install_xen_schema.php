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
			array('config.add', array('xiradorn_xen_enabled', 1))
		);
	}

	public function update_schema()
	{
		/**
		 * Add table for support menu
		 */
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'xdojonavbar_config'	=> array(
					'COLUMNS'	=> array(
						'xen_config_param'				=> array('VCHAR', ''),
						'xen_config_value'				=> array('VCHAR', ''),
						'xen_config_extra'				=> array('VCHAR', ''),
					),
					'PRIMARY_KEY'	=> array(
						'xen_config_param',
					),
				),
				$this->table_prefix . 'xdojonavbar_items'	=> array(
					'COLUMNS'	=> array(
						'xen_item_id'					=> array('UINT', null, 'auto_increment'),
						'xen_item_title'				=> array('TEXT', ''),
						'xen_item_link'					=> array('TEXT', ''),
						'xen_item_description'			=> array('TEXT', ''),
						'xen_item_attributes'			=> array('TEXT', ''),
						'xen_item_left_id'				=> array('UINT', 0),
						'xen_item_right_id'				=> array('UINT', 0),
						'xen_item_parent_id'			=> array('UINT', 0),
						
						'xen_subitem_enabled'			=> array('BOOL', 0),
						'xen_subitem_type'				=> array('UINT', 0),
						'xen_subitem_attributes'		=> array('TEXT', ''),
						'xen_subitem_large_img_link'	=> array('TEXT', ''),
					),
					'PRIMARY_KEY'	=> array(
						'xen_item_id',
					),
				),
			),
		);
	}

	public function revert_schema() 
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'xiradorn_xen_config',
				$this->table_prefix . 'xiradorn_xen_items',
			),
		);
	}

}
