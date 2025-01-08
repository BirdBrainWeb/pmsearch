<?php
/**
 * This file is part of the PM Search extension for phpBB.
 * @package bbw/pmsearch
 * @license GNU General Public License, version 2 [GPL-2.0](https://opensource.org/license/gpl-2-0)
 */
namespace bbw\pmsearch\ucp;

/**
 */
class ucp_pmsearch_info
{
	function module()
	{
		return [
			'filename'	=> '\bbw\pmsearch\ucp\pmsearch_module',
			'title'		=> 'UCP_PMSEARCH',
			'modes'		=> [
				'search'	=> [
					'title'		=> 'UCP_PMSEARCH',
					'auth'		=> 'ext_bbw/pmsearch',
					'cat'		=> ['UCP_PM'],
				],
			],
		];
	}
}
