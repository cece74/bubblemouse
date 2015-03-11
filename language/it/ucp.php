<?php
/**
*
* @package phpBB Extension - Bubble Mouse - Italian
* @copyright (c) 2015
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BUBBLEMOUSE'			=> 'Usa Bubble Mouse',
	'BUBBLEMOUSE_EXPLAIN'	=> 'Con "si" attivi Bubble Mouse.',
));
