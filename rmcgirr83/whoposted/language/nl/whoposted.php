<?php
/**
*
* @package Who posted
* @copyright (c) 2016 RMcGirr83
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'WHOPOSTED_TITLE'	=> 'Wie postte hier?',
	'WHOPOSTED_EXP'		=> 'Dit is een lijst van alle gebruikers die een berichten gepost hebben in deze topic',
	'WHOPOSTED_SHOW'	=> 'Toon topic',
	'AND_MORE_USERS'				=> array(
		1 => 'en %s andere gebruiker',
		2 => 'en %s andere gebruikers',
	),
));
