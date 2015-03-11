<?php
/**
*
* @package phpBB Extension - Bubble Mouse - English
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
	'BUBBLEMOUSE'			=> 'Use Bubble Mouse',
	'BUBBLEMOUSE_EXPLAIN'	=> 'With "yes" active Bubble Mouse.',
));
