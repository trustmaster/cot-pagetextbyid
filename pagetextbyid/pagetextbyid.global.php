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
 * @param int|string $pid Page ID or Alias
 * @return string
 */
function pagetextbyid($pid)
{
	global $db, $db_pages, $cfg, $last_pagetext;
	$last_pagetext = array();
	$last_pagetext['pid'] = $pid;
	if (is_numeric($pid)) {
		$res = $db->query("SELECT page_id, page_alias, page_title, page_text, page_parser FROM $db_pages WHERE page_id = ?", array((int) $pid));
		$last_pagetext['id'] = $id;
	} else {
		$res = $db->query("SELECT page_id, page_alias, page_title, page_text, page_parser FROM $db_pages WHERE page_alias = ?", array((string) $pid));
		$last_pagetext['alias'] = $pid;
	}

	if ($res->rowCount() > 0)
	{
		$row = $res->fetch();
		$last_pagetext['text'] = cot_parse($row['page_text'], $cfg['page']['markup'], $row['page_parser']);
		$last_pagetext['id'] = $row['page_id'];
		$last_pagetext['alias'] = $row['page_alias'];
		$last_pagetext['title'] = $row['page_title'];
		return $last_pagetext['text'];
	}
	else
	{
		return '';
	}
}

?>
