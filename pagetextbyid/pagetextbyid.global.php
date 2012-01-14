<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

/**
 * Returns parsed page_text for a given page
 * @param int $id Page ID
 * @return string
 */
function pagetextbyid($id)
{
	global $db, $db_pages, $cfg;
	$res = $db->query("SELECT page_text, page_parser FROM $db_pages WHERE page_id = ?", array((int) $id));
	if ($res->rowCount() > 0)
	{
		$row = $res->fetch();
		return cot_parse($row['page_text'], $cfg['page']['markup'], $row['page_parser']);
	}
	else
	{
		return '';
	}
}

?>
