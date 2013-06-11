<?php
/**
*
* @package acp
* @version $Id$ 1.1.0
* @copyright (c) 2008 Z3u5, 2012 _Vinny_ - www.suportephpbb.com.br
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class quickreply
{
	//true to Enable | false to Disable
	var $active					= true;
	var $color_nick				= true;
	var $quote_last_post_cative	= true;
	var $enable_bbcode_box		= true;
	var $user_alter_subject		= true;

	/**
	* Constructor
	*
	* @param int $topic_id
	* @param int $forum_id
	* @param array $topic_data
	*/
	function quickreply($topic_id, $forum_id, &$topic_data, $last_post)
	{
		global $db, $template, $user, $config, $auth, $phpbb_root_path, $phpEx;

		//Check of this user can post reply
		if (!$auth->acl_get('f_reply', $forum_id) || !$this->active || ($topic_data['topic_status'] == ITEM_LOCKED))
		{
			$this->active = false;
			return;
		}

		//Add Language fle
		$user->add_lang('mods/quickreply');

		// Hidden fields
		$s_hidden_fields = array(
			't'			=> $topic_id,
			'f'			=> $forum_id,
			'mode'		=> 'reply',
			'lastclick'	=> time(),
			'icon'		=> 0,
		);

		// Set preferences such as allow smilies, bbcode, attachsig
		if(!$config['allow_bbcode'] && !$user->optionget('bbcode'))
		{
			$s_hidden_fields['disable_bbcode'] = false;
		}
		if(!$config['allow_smilies'] && !$user->optionget('smilies'))
		{
			$s_hidden_fields['disable_smilies'] = false;
		}

		//Set last post data
		//Removing BBCODE uid
		$bbcode_uid = $last_post['bbcode_uid'];
		$last_poster = $last_post['username'];
        $last_msg = str_replace(":1:$bbcode_uid", '', $last_post['post_text']);
        $last_msg = str_replace(":$bbcode_uid", '', $last_msg);        
        $last_msg = str_replace("'", '&#39;', $last_msg);
        $last_msg = str_replace("[/list:u]", '[/list]', $last_msg);		
        $last_msg = str_replace('[/*:m]', '[/*]', $last_msg);
		$last_msg = '[quote="' . $last_poster . '"]' . $last_msg . '[/quote]';
		//Remove smilies code
		$last_msg = preg_replace('#<!\-\- s(.*?) \-\-><img src="\{SMILIES_PATH\}\/.*? \/><!\-\- s\1 \-\->#', '\1', $last_msg);

		unset($last_post);

		$subject = ((strpos($topic_data['topic_title'], 'Re: ') !== 0) ? 'Re: ' : '') . censor_text($topic_data['topic_title']);

		// Confirmation code handling (stolen from posting.php)
		if ($config['enable_post_confirm'] && !$user->data['is_registered'])
		{
			include($phpbb_root_path . 'includes/captcha/captcha_factory.' . $phpEx);
			$captcha =& phpbb_captcha_factory::get_instance($config['captcha_plugin']);
			$captcha->init(CONFIRM_POST);

			$template->assign_vars(array(
				'S_CONFIRM_CODE'			=> true,
				'CAPTCHA_TEMPLATE'			=> $captcha->get_template(),
			));
		}

		// Page title & action URL, include session_id for security purpose
		$s_action = append_sid("{$phpbb_root_path}posting.$phpEx", false, true, $user->session_id);
		add_form_key('posting');

		// Generate smiley listing
		include $phpbb_root_path . 'includes/functions_posting.' . $phpEx;
		generate_smilies('inline', $forum_id);

		// Build bbcodes
		// HTML, BBCode, Smilies, Images and Flash status
		$bbcode_status	= ($config['allow_bbcode'] && $auth->acl_get('f_bbcode', $forum_id)) ? true : false;
		$smilies_status	= ($bbcode_status && $config['allow_smilies'] && $auth->acl_get('f_smilies', $forum_id)) ? true : false;
		$img_status		= ($bbcode_status && $auth->acl_get('f_img', $forum_id)) ? true : false;
		$url_status		= ($config['allow_post_links']) ? true : false;
		$flash_status	= ($bbcode_status && $auth->acl_get('f_flash', $forum_id) && $config['allow_post_flash']) ? true : false;
		$quote_status	= ($auth->acl_get('f_reply', $forum_id)) ? true : false;

		if($this->enable_bbcode_box)
		{
			display_custom_bbcodes();
			$user->add_lang('posting');
		}

		// Assign template variables
		$template->assign_vars(array(
			'QR_SUBJECT'			=> $subject,

			'S_QR_HIDDEN_FIELDS'	=> build_hidden_fields($s_hidden_fields),
			'S_QR_LAST_POST'		=> $last_msg,
			'S_QR_POST_ACTION'		=> $s_action,

			'S_QR_BBCODE_BOX_ACTIVE'=> $this->enable_bbcode_box,		
			'S_BBCODE_ALLOWED'		=> $bbcode_status,
			'S_BBCODE_IMG'			=> $img_status,
			'S_BBCODE_URL'			=> $url_status,
			'S_LINKS_ALLOWED'		=> $url_status,
			'S_SMILIES_ALLOWED'		=> $smilies_status,
			'S_BBCODE_FLASH'		=> $flash_status,
			'S_BBCODE_QUOTE'		=> $quote_status,
			'QR_MIN_CHAR_CONFIG'	=> $config['min_post_chars'],

			'S_EDIT_DRAFT'			=> true,
			'S_QR_SUBJECT'			=> $this->user_alter_subject,

			'S_QR_COLOR_NICK'		=> $this->color_nick,
			'S_QR_ACTIVE'			=> $this->active,
			'S_QR_QUOTE_LAST'		=> $this->quote_last_post_cative,

			'S_QR_NOTIFY_CHECKED'	=> ($user->data['user_notify']) ? ' checked="checked"' : '',
			'S_QR_SIGNATURE_CHECKED'=> ($user->optionget('attachsig')) ? ' checked="checked"' : '',

			'S_QR_ATTACH_SIG'		=> ($auth->acl_get('f_sigs', $forum_id) && $config['allow_sig'] && $user->data['is_registered']) ? true : false,
			'S_QR_NOTIFY'			=> ($config['allow_topic_notify'] && $user->data['is_registered']) ? true : false));
		return;	
	}
}
?>