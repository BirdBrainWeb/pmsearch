<?php
/**
 * This file is part of the PM Search extension for phpBB.
 * @package bbw/pmsearch
 * @license GNU General Public License, version 2 [GPL-2.0](https://opensource.org/license/gpl-2-0)
 */
namespace bbw\pmsearch\tests\functional;

/**
* @group functional
*/
class pmsearch_base extends \phpbb_functional_test_case
{
	static protected function setup_extensions()
	{
		return array('bbw/pmsearch');
	}

	public function setUp() : void
	{
		parent::setUp();
	}

	public function get_user_id($username)
	{
		$sql = 'SELECT user_id, username
				FROM ' . USERS_TABLE . '
				WHERE username_clean = \''.$this->db->sql_escape(utf8_clean_string($username)).'\'';
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		return $row['user_id'];
	}
}
