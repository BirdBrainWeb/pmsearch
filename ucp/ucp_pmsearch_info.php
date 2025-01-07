<?php
/**
 * This file is part of the PM Search extension for phpBB 3.1/3.2.
 * @package bbw/pmsearch
 * @copyright (c) Stanislav Atanasov
 * @license GNU General Public License, version 2 [GPL-2.0](https://opensource.org/license/gpl-2-0)
 */
namespace bbw\pmsearch\ucp;

class ucp_pmsearch_info
{
	function module()
	{
		return array(
			'filename' => '\bbw\pmsearch\ucp\ucp_pmsearch_module',
			'title' => 'PMSEARCH_TITLE',
			'version' => '1.0.0',
			'modes' => array(
				'search' => array(
					'title' => 'PMSEARCH_TITLE',
					'auth' => 'ext_bbw/pmsearch',
					'cat' => array('UCP_PM')
				),
			),
		);
	}
}
