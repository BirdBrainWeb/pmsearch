<?php
/**
 * This file is part of the PM Search extension for phpBB.
 * @package bbw/pmsearch
 * @license GNU General Public License, version 2 [GPL-2.0](https://opensource.org/license/gpl-2-0)
 */
namespace bbw\pmsearch\acp;

/**
 */
class pmsearch_info
{
	public function module()
	{
		return [
			'filename'	=> '\bbw\pmsearch\acp\pmsearch_module',
			'title'		=> 'ACP_PMSEARCH',
			'modes'		=> [
				'index'		=> [
					'title'		=> 'ACP_PMSEARCH',
					'auth' 		=> 'ext_bbw/pmsearch && acl_a_user && acl_a_board',
					'cat'		=> ['ACP_CAT_DATABASE'],
				],
			],
		];
	}
}
