<?php
/** 
*
* quickreply [English]
*
* @package language
* @version $Id$ 1.1.0
* @copyright (c) 2008 Z3u5, 2012 _Vinny_ - www.suportephpbb.com.br
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ATTACH_SIG'				=> 'Attach a signature (signatures can be altered via the UCP)',
	'MORE_SMILIES'				=> 'View more smilies',
	'NO_TEXT_SELECTED'			=> 'Select text and try again',
	'NOTIFY_REPLY'				=> 'Notify me when a reply is posted',
	'POST_REPLY'				=> 'Post a reply',
	'QUOTE_LAST_POST'			=> 'Quote the last message',
	'QUOTE_SELECTED'			=> 'Quote Selected',
	'SMILIES'					=> 'Smilies',
	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',	
));

?>