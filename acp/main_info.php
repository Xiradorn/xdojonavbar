<?php
/**
 *
 * xSensei - xDojo Navbar. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Sir Xiradorn, http://xiradorn.it
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace xiradorn\xdojonavbar\acp;

/**
 * xSensei - xDojo Navbar ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\xiradorn\xdojonavbar\acp\main_module',
			'title'		=> 'ACP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_DEMO',
					'auth'	=> 'ext_xiradorn/xdojonavbar && acl_a_board',
					'cat'	=> array('ACP_DEMO_TITLE')
				),
			),
		);
	}
}
