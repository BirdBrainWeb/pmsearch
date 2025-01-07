<?php
/**
 * This file is part of the PM Search extension for phpBB 3.1/3.2.
 * @package bbw/pmsearch
 * @copyright (c) Stanislav Atanasov
 * @license GNU General Public License, version 2 [GPL-2.0](https://opensource.org/license/gpl-2-0)

*
* @package acp
* @version $Id: acp_pmsearch_info.php,v 1.10 2006/12/31 16:56:14 acydburn Exp $
* @copyright (c) 2006 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

namespace bbw\pmsearch\acp;

/**
* @package module_install
*/
class acp_pmsearch_info
{
	function module()
	{
		return array(
			'filename'	=> 'bbw\pmsearch\acp\acp_pmsearch_module',
			'title'		=> 'ACP_PMSEARCH', // define in the lang/xx/acp/common.php language file
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'		=> array(
					'title'		=> 'ACP_PRVOPT',
					'auth' 		=> 'ext_bbw/pmsearch && acl_a_user',
					'cat'		=> array('ACP_PMSEARCH_GRP')
				),
			),
		);
	}
}
