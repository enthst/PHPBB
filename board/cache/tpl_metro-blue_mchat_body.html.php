<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['MCHAT_ARCHIVE_MODE'] || $this->_rootref['MCHAT_CUSTOM_PAGE']) {  $this->_tpl_include('overall_header.html'); } if ($this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

<!--**
*
* @package mChat
* @version $Id: mchat_body.html,v 1.3.5 02/12/2010 RMcGirr83 Exp $
* @copyright (c) 2010 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/-->
<table width="100%" cellspacing="1">
	<tr>
		<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php if ($this->_rootref['MCHAT_PAGINATION']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['MCHAT_PAGE_NUMBER'])) ? $this->_rootref['MCHAT_PAGE_NUMBER'] : ''; ?></a><?php } else { echo (isset($this->_rootref['MCHAT_PAGE_NUMBER'])) ? $this->_rootref['MCHAT_PAGE_NUMBER'] : ''; } ?><br /></td>
		<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['MCHAT_TOTAL_MESSAGES'])) ? $this->_rootref['MCHAT_TOTAL_MESSAGES'] : ''; ?> ]&nbsp;</td>
		<td class="gensmall" width="100%" align="right" nowrap="nowrap"><?php if ($this->_rootref['MCHAT_PAGINATION']) {  ?><b><?php echo (isset($this->_rootref['MCHAT_PAGINATION'])) ? $this->_rootref['MCHAT_PAGINATION'] : ''; ?></b><?php } else { ?>&nbsp;<?php } ?></td>
	</tr>
</table>
<?php } if (! $this->_rootref['MCHAT_READ_MODE']) {  if (! $this->_rootref['S_MCHAT_LOCATION']) {  ?><br /><?php } ?>

<table class="tablebg" width="100%" cellspacing="1" style="table-layout: fixed;">
	<tr>
		<td class="cat"><a name="mChat"></a><?php if ($this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?><h4><?php echo ((isset($this->_rootref['L_MCHAT_ARCHIVE_PAGE'])) ? $this->_rootref['L_MCHAT_ARCHIVE_PAGE'] : ((isset($user->lang['MCHAT_ARCHIVE_PAGE'])) ? $user->lang['MCHAT_ARCHIVE_PAGE'] : '{ MCHAT_ARCHIVE_PAGE }')); ?></h4><?php } else { ?><h4>Shoutbox</h4><?php } ?> <div class="mChatOpts"><span class="dec">-</span><span class="inc">+</span></div></td>
	</tr>
	<tr>
		<td class="mChatBodyFix" width="100%" valign="middle">
<?php } if ($this->_rootref['MCHAT_ENABLE']) {  if (! $this->_rootref['MCHAT_READ_MODE']) {  ?>

			<script type="text/javascript">
			// <![CDATA[
			// Define mChat setting
			var mChatNoMessage = '<?php echo (isset($this->_rootref['MCHAT_NOMESSAGE_MODE'])) ? $this->_rootref['MCHAT_NOMESSAGE_MODE'] : ''; ?>';
			var mChatFile = '<?php echo (isset($this->_rootref['MCHAT_FILE_NAME'])) ? $this->_rootref['MCHAT_FILE_NAME'] : ''; ?>';
			var mChatForumRoot = '<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>';
			var mChatCustomPage = '<?php echo (isset($this->_rootref['MCHAT_CUSTOM_PAGE'])) ? $this->_rootref['MCHAT_CUSTOM_PAGE'] : ''; ?>';
			<?php if (! $this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

			var mChatPause = '<?php echo (isset($this->_rootref['MCHAT_PAUSE_ON_INPUT'])) ? $this->_rootref['MCHAT_PAUSE_ON_INPUT'] : ''; ?>';
			var mChatRefresh = '<?php echo (isset($this->_rootref['MCHAT_REFRESH_JS'])) ? $this->_rootref['MCHAT_REFRESH_JS'] : ''; ?>';
			<?php } else { ?>

			var mChatPause = false;
			var mChatRefresh = false;
			<?php } if ($this->_rootref['MCHAT_USER_TIMEOUT']) {  ?>

			var mChatUserTimeout = '<?php echo (isset($this->_rootref['MCHAT_USER_TIMEOUT'])) ? $this->_rootref['MCHAT_USER_TIMEOUT'] : ''; ?>';
			<?php } else { ?>

			var mChatUserTimeout = false;
			<?php } ?>

			var mChatNoMessageInput = '<?php echo ((isset($this->_rootref['LA_MCHAT_NOMESSAGEINPUT'])) ? $this->_rootref['LA_MCHAT_NOMESSAGEINPUT'] : ((isset($this->_rootref['L_MCHAT_NOMESSAGEINPUT'])) ? addslashes($this->_rootref['L_MCHAT_NOMESSAGEINPUT']) : ((isset($user->lang['MCHAT_NOMESSAGEINPUT'])) ? addslashes($user->lang['MCHAT_NOMESSAGEINPUT']) : '{ MCHAT_NOMESSAGEINPUT }'))); ?>';
			var mChatNoMessage = '<?php echo ((isset($this->_rootref['LA_MCHAT_NOMESSAGE'])) ? $this->_rootref['LA_MCHAT_NOMESSAGE'] : ((isset($this->_rootref['L_MCHAT_NOMESSAGE'])) ? addslashes($this->_rootref['L_MCHAT_NOMESSAGE']) : ((isset($user->lang['MCHAT_NOMESSAGE'])) ? addslashes($user->lang['MCHAT_NOMESSAGE']) : '{ MCHAT_NOMESSAGE }'))); ?>';
			var mChatEditInfo = '<?php echo ((isset($this->_rootref['LA_MCHAT_EDITINFO'])) ? $this->_rootref['LA_MCHAT_EDITINFO'] : ((isset($this->_rootref['L_MCHAT_EDITINFO'])) ? addslashes($this->_rootref['L_MCHAT_EDITINFO']) : ((isset($user->lang['MCHAT_EDITINFO'])) ? addslashes($user->lang['MCHAT_EDITINFO']) : '{ MCHAT_EDITINFO }'))); ?>';
			var mChatNoAccess = '<?php echo ((isset($this->_rootref['LA_MCHAT_NOACCESS'])) ? $this->_rootref['LA_MCHAT_NOACCESS'] : ((isset($this->_rootref['L_MCHAT_NOACCESS'])) ? addslashes($this->_rootref['L_MCHAT_NOACCESS']) : ((isset($user->lang['MCHAT_NOACCESS'])) ? addslashes($user->lang['MCHAT_NOACCESS']) : '{ MCHAT_NOACCESS }'))); ?>';
			var mChatFlood = '<?php echo ((isset($this->_rootref['LA_MCHAT_FLOOD'])) ? $this->_rootref['LA_MCHAT_FLOOD'] : ((isset($this->_rootref['L_MCHAT_FLOOD'])) ? addslashes($this->_rootref['L_MCHAT_FLOOD']) : ((isset($user->lang['MCHAT_FLOOD'])) ? addslashes($user->lang['MCHAT_FLOOD']) : '{ MCHAT_FLOOD }'))); ?>';
			var mChatDelConfirm = '<?php echo ((isset($this->_rootref['LA_MCHAT_DELCONFIRM'])) ? $this->_rootref['LA_MCHAT_DELCONFIRM'] : ((isset($this->_rootref['L_MCHAT_DELCONFIRM'])) ? addslashes($this->_rootref['L_MCHAT_DELCONFIRM']) : ((isset($user->lang['MCHAT_DELCONFIRM'])) ? addslashes($user->lang['MCHAT_DELCONFIRM']) : '{ MCHAT_DELCONFIRM }'))); ?>';
			var mChatReset = '<?php echo ((isset($this->_rootref['LA_MCHAT_RESET_QUESTION'])) ? $this->_rootref['LA_MCHAT_RESET_QUESTION'] : ((isset($this->_rootref['L_MCHAT_RESET_QUESTION'])) ? addslashes($this->_rootref['L_MCHAT_RESET_QUESTION']) : ((isset($user->lang['MCHAT_RESET_QUESTION'])) ? addslashes($user->lang['MCHAT_RESET_QUESTION']) : '{ MCHAT_RESET_QUESTION }'))); ?>';
			var mChatRefreshing = '<?php echo ((isset($this->_rootref['LA_MCHAT_REFRESHING'])) ? $this->_rootref['LA_MCHAT_REFRESHING'] : ((isset($this->_rootref['L_MCHAT_REFRESHING'])) ? addslashes($this->_rootref['L_MCHAT_REFRESHING']) : ((isset($user->lang['MCHAT_REFRESHING'])) ? addslashes($user->lang['MCHAT_REFRESHING']) : '{ MCHAT_REFRESHING }'))); ?>';
			var mChatSessOut = '<?php echo ((isset($this->_rootref['LA_MCHAT_SESSION_OUT'])) ? $this->_rootref['LA_MCHAT_SESSION_OUT'] : ((isset($this->_rootref['L_MCHAT_SESSION_OUT'])) ? addslashes($this->_rootref['L_MCHAT_SESSION_OUT']) : ((isset($user->lang['MCHAT_SESSION_OUT'])) ? addslashes($user->lang['MCHAT_SESSION_OUT']) : '{ MCHAT_SESSION_OUT }'))); ?>';
			var mChatSessEnds = '<?php echo ((isset($this->_rootref['LA_MCHAT_SESSION_ENDS'])) ? $this->_rootref['LA_MCHAT_SESSION_ENDS'] : ((isset($this->_rootref['L_MCHAT_SESSION_ENDS'])) ? addslashes($this->_rootref['L_MCHAT_SESSION_ENDS']) : ((isset($user->lang['MCHAT_SESSION_ENDS'])) ? addslashes($user->lang['MCHAT_SESSION_ENDS']) : '{ MCHAT_SESSION_ENDS }'))); ?>';
			var mChatRefreshYes = '<?php echo (isset($this->_rootref['MCHAT_REFRESH_YES'])) ? $this->_rootref['MCHAT_REFRESH_YES'] : ''; ?>';
			var mChatRefreshNo = '<?php echo ((isset($this->_rootref['LA_MCHAT_REFRESH_NO'])) ? $this->_rootref['LA_MCHAT_REFRESH_NO'] : ((isset($this->_rootref['L_MCHAT_REFRESH_NO'])) ? addslashes($this->_rootref['L_MCHAT_REFRESH_NO']) : ((isset($user->lang['MCHAT_REFRESH_NO'])) ? addslashes($user->lang['MCHAT_REFRESH_NO']) : '{ MCHAT_REFRESH_NO }'))); ?>';
			var mChatMssgLngthLong = '<?php echo (isset($this->_rootref['MCHAT_MESS_LONG'])) ? $this->_rootref['MCHAT_MESS_LONG'] : ''; ?>';
			<?php if ($this->_rootref['MCHAT_MESSAGE_LNGTH']) {  ?>

			var mChatMssgLngth = '<?php echo (isset($this->_rootref['MCHAT_MESSAGE_LNGTH'])) ? $this->_rootref['MCHAT_MESSAGE_LNGTH'] : ''; ?>';
			<?php } else { ?>

			var mChatMssgLngth = false;
			<?php } if ($this->_rootref['S_MCHAT_SOUND_YES']) {  ?>

			var mChatSound = true;
			<?php } else { ?>

			var mChatSound = false;
			<?php } if ($this->_rootref['MCHAT_WHOIS']) {  ?>

			var mChatWhois = true;
			var mChatWhoisRefresh = '<?php echo (isset($this->_rootref['MCHAT_WHOIS_REFRESH'])) ? $this->_rootref['MCHAT_WHOIS_REFRESH'] : ''; ?>';
			<?php } else { ?>

			var mChatWhois = false;
			var mChatWhoisRefresh = false;
			<?php } if ($this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

			var mChatArchiveMode = true;
			<?php } else { ?>

			var mChatArchiveMode = false;
			var form_name = 'postform';
			var text_name = 'message';
			var mChatFocusFix = true;
			<?php } ?>

			// ]]>
			</script>
			<?php if (! $this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

			<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/editor.js"></script>
			<div id="mChatmain" <?php if ($this->_rootref['MCHAT_CUSTOM_PAGE']) {  ?>class="mChatRowLimitCustom" style="height: <?php echo (isset($this->_rootref['MCHAT_CUSTOM_HEIGHT'])) ? $this->_rootref['MCHAT_CUSTOM_HEIGHT'] : ''; ?>px;"<?php } else { ?>class="mChatRowLimit" style="height: <?php echo (isset($this->_rootref['MCHAT_INDEX_HEIGHT'])) ? $this->_rootref['MCHAT_INDEX_HEIGHT'] : ''; ?>px;"<?php } ?>>
				<?php } ?>

				<div id="mChatData">
					<?php } if ($this->_rootref['S_MCHAT_AVATARS']) {  $this->_tpl_include('mchat_avatars.html'); } else { $this->_tpl_include('mchat_no_avatars.html'); } if (! $this->_rootref['MCHAT_READ_MODE']) {  if ($this->_rootref['MCHAT_NOMESSAGE_MODE']) {  ?><div id="mChatNoMessage"><?php echo ((isset($this->_rootref['L_MCHAT_NOMESSAGE'])) ? $this->_rootref['L_MCHAT_NOMESSAGE'] : ((isset($user->lang['MCHAT_NOMESSAGE'])) ? $user->lang['MCHAT_NOMESSAGE'] : '{ MCHAT_NOMESSAGE }')); ?></div><?php } ?>

				</div>
				<?php if (! $this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

			</div>
			<?php if ($this->_rootref['MCHAT_STATIC_MESS']) {  ?><div class="mChatStatic"><strong><?php echo ((isset($this->_rootref['L_MCHAT_ANNOUNCEMENT'])) ? $this->_rootref['L_MCHAT_ANNOUNCEMENT'] : ((isset($user->lang['MCHAT_ANNOUNCEMENT'])) ? $user->lang['MCHAT_ANNOUNCEMENT'] : '{ MCHAT_ANNOUNCEMENT }')); ?>:</strong> <span style="color:#990000;"><?php echo (isset($this->_rootref['MCHAT_STATIC_MESS'])) ? $this->_rootref['MCHAT_STATIC_MESS'] : ''; ?></span></div><?php } if (! ( $this->_rootref['MCHAT_ARCHIVE_MODE'] || $this->_rootref['MCHAT_CUSTOM_PAGE'] ) && $this->_rootref['MCHAT_WHOIS'] && $this->_rootref['S_MCHAT_INDEX_STATS']) {  ?><div class="mChatStats" id="mChatStats"><?php if ($this->_rootref['MCHAT_USERS_LIST']) {  ?><a href="#" onclick="mChat.toggle('UserList'); return false;"><?php echo (isset($this->_rootref['MCHAT_USERS_COUNT'])) ? $this->_rootref['MCHAT_USERS_COUNT'] : ''; ?></a><?php } else { echo (isset($this->_rootref['MCHAT_USERS_COUNT'])) ? $this->_rootref['MCHAT_USERS_COUNT'] : ''; } ?>&nbsp;<?php echo ((isset($this->_rootref['L_MCHAT_ONLINE_EXPLAIN'])) ? $this->_rootref['L_MCHAT_ONLINE_EXPLAIN'] : ((isset($user->lang['MCHAT_ONLINE_EXPLAIN'])) ? $user->lang['MCHAT_ONLINE_EXPLAIN'] : '{ MCHAT_ONLINE_EXPLAIN }')); ?><br /><span id="mChatUserList"><?php echo (isset($this->_rootref['MCHAT_USERS_LIST'])) ? $this->_rootref['MCHAT_USERS_LIST'] : ''; ?></span></div><?php } ?>

				<form method="post" action="javascript://" onsubmit="mChat.add();" id="postform">
				<div class="mChatPanel">
					<noscript><div style="color: #FF0000;"><?php echo ((isset($this->_rootref['L_MCHAT_NOJAVASCRIPT'])) ? $this->_rootref['L_MCHAT_NOJAVASCRIPT'] : ((isset($user->lang['MCHAT_NOJAVASCRIPT'])) ? $user->lang['MCHAT_NOJAVASCRIPT'] : '{ MCHAT_NOJAVASCRIPT }')); ?></div></noscript>
					<?php if ($this->_rootref['MCHAT_ADD_MESSAGE']) {  ?>

					<input type="hidden" name="mode" value="add" />
					<input type="text" name="message" class="mChatText" id="mChatMessage" />
					<input id="submit_button" type="button" class="btnlite" onclick="mChat.add();" value="<?php echo ((isset($this->_rootref['L_MCHAT_ADD'])) ? $this->_rootref['L_MCHAT_ADD'] : ((isset($user->lang['MCHAT_ADD'])) ? $user->lang['MCHAT_ADD'] : '{ MCHAT_ADD }')); ?>" />
					<input id="mChatClear" type="button" class="btnlite" onclick="mChat.clear();" value="<?php echo ((isset($this->_rootref['L_MCHAT_CLEAR_INPUT'])) ? $this->_rootref['L_MCHAT_CLEAR_INPUT'] : ((isset($user->lang['MCHAT_CLEAR_INPUT'])) ? $user->lang['MCHAT_CLEAR_INPUT'] : '{ MCHAT_CLEAR_INPUT }')); ?>" />
					<?php if ($this->_rootref['MCHAT_ALLOW_SMILES'] && sizeof($this->_tpldata['smiley'])) {  ?>

					<input type="button" class="btnlite" onclick="mChat.toggle('Smiles');" value="<?php echo ((isset($this->_rootref['L_MCHAT_SMILES'])) ? $this->_rootref['L_MCHAT_SMILES'] : ((isset($user->lang['MCHAT_SMILES'])) ? $user->lang['MCHAT_SMILES'] : '{ MCHAT_SMILES }')); ?>" />
					<?php } if ($this->_rootref['MCHAT_ALLOW_BBCODES']) {  ?>

					<input type="button" class="btnlite" onclick="mChat.toggle('BBCodes');" value="<?php echo ((isset($this->_rootref['L_MCHAT_BBCODES'])) ? $this->_rootref['L_MCHAT_BBCODES'] : ((isset($user->lang['MCHAT_BBCODES'])) ? $user->lang['MCHAT_BBCODES'] : '{ MCHAT_BBCODES }')); ?>" />
					<?php } } if ($this->_rootref['MCHAT_READ_ARCHIVE_BUTTON']) {  ?>

					<input type="button" class="btnlite" onclick="window.location.href = '<?php echo (isset($this->_rootref['MCHAT_ARCHIVE_URL'])) ? $this->_rootref['MCHAT_ARCHIVE_URL'] : ''; ?>';" value="<?php echo ((isset($this->_rootref['L_MCHAT_ARCHIVE'])) ? $this->_rootref['L_MCHAT_ARCHIVE'] : ((isset($user->lang['MCHAT_ARCHIVE'])) ? $user->lang['MCHAT_ARCHIVE'] : '{ MCHAT_ARCHIVE }')); ?>" />
					<?php } if ($this->_rootref['MCHAT_FOUNDER']) {  ?>

					<input type="button" class="btnlite" onclick="window.location.href = '<?php echo (isset($this->_rootref['MCHAT_CLEAN_URL'])) ? $this->_rootref['MCHAT_CLEAN_URL'] : ''; ?>';" value="<?php echo ((isset($this->_rootref['L_MCHAT_CLEAN'])) ? $this->_rootref['L_MCHAT_CLEAN'] : ((isset($user->lang['MCHAT_CLEAN'])) ? $user->lang['MCHAT_CLEAN'] : '{ MCHAT_CLEAN }')); ?>" />
					<?php } if ($this->_rootref['MCHAT_ADD_MESSAGE']) {  if ($this->_rootref['MCHAT_RULES']) {  ?>

					<input type="button" class="btnlite" onclick="popup('<?php echo (isset($this->_rootref['U_MCHAT_RULES'])) ? $this->_rootref['U_MCHAT_RULES'] : ''; ?>', 450, 275); return false;" value="<?php echo ((isset($this->_rootref['L_MCHAT_HELP'])) ? $this->_rootref['L_MCHAT_HELP'] : ((isset($user->lang['MCHAT_HELP'])) ? $user->lang['MCHAT_HELP'] : '{ MCHAT_HELP }')); ?>" />
					<?php } if ($this->_rootref['MCHAT_ALLOW_BBCODES']) {  $this->_tpl_include('mchat_bbcodes.html'); } } if ($this->_rootref['MCHAT_ALLOW_SMILES'] && sizeof($this->_tpldata['smiley'])) {  ?>

					<div id="mChatSmiles" style="padding: 5px; display: none;">
						<?php $_smiley_count = (isset($this->_tpldata['smiley'])) ? sizeof($this->_tpldata['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$this->_tpldata['smiley'][$_smiley_i]; ?>

						<a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); return false;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" /></a>
						<?php }} ?>

						<a href="<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;"><?php echo ((isset($this->_rootref['L_MORE_SMILIES'])) ? $this->_rootref['L_MORE_SMILIES'] : ((isset($user->lang['MORE_SMILIES'])) ? $user->lang['MORE_SMILIES'] : '{ MORE_SMILIES }')); ?></a>
					</div>
					<?php } ?>

				</div>
				</form>
			<?php } ?>

			<div id="mChatSound" class="mChatSound"></div>
			<script type="text/javascript" src="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>mchat/mchat_ajax_mini.js"></script>
			<?php } } else { ?>

			<div class="mchat_alert"><?php echo ((isset($this->_rootref['L_MCHAT_ENABLE'])) ? $this->_rootref['L_MCHAT_ENABLE'] : ((isset($user->lang['MCHAT_ENABLE'])) ? $user->lang['MCHAT_ENABLE'] : '{ MCHAT_ENABLE }')); ?></div>
			<?php } if (! $this->_rootref['MCHAT_READ_MODE']) {  ?>

		</td>
	</tr>
</table>
<br clear="all" />
<?php } if ($this->_rootref['MCHAT_ARCHIVE_MODE']) {  ?>

<table width="100%" cellspacing="1">
	<tr>
		<td class="nav" valign="middle" nowrap="nowrap">&nbsp;<?php if ($this->_rootref['MCHAT_PAGINATION']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['MCHAT_PAGE_NUMBER'])) ? $this->_rootref['MCHAT_PAGE_NUMBER'] : ''; ?></a><?php } else { echo (isset($this->_rootref['MCHAT_PAGE_NUMBER'])) ? $this->_rootref['MCHAT_PAGE_NUMBER'] : ''; } ?><br /></td>
		<td class="gensmall" nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['MCHAT_TOTAL_MESSAGES'])) ? $this->_rootref['MCHAT_TOTAL_MESSAGES'] : ''; ?> ]&nbsp;</td>
		<td class="gensmall" width="100%" align="right" nowrap="nowrap"><?php if ($this->_rootref['MCHAT_PAGINATION']) {  ?><b><?php echo (isset($this->_rootref['MCHAT_PAGINATION'])) ? $this->_rootref['MCHAT_PAGINATION'] : ''; ?></b><?php } else { ?>&nbsp;<?php } ?></td>
	</tr>
</table>
<?php } if ($this->_rootref['MCHAT_CUSTOM_PAGE'] && $this->_rootref['MCHAT_WHOIS']) {  ?>

<br clear="all" />
<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat" colspan="2"><h4><?php echo ((isset($this->_rootref['L_WHO_IS_CHATTING'])) ? $this->_rootref['L_WHO_IS_CHATTING'] : ((isset($user->lang['WHO_IS_CHATTING'])) ? $user->lang['WHO_IS_CHATTING'] : '{ WHO_IS_CHATTING }')); ?></h4></td>
	</tr>
	<tr>
		<?php if ($this->_rootref['LEGEND']) {  ?>

		<td class="row1" rowspan="2" align="center" valign="middle"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/whosonline.gif" alt="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" /></td>
		<?php } else { ?>

		<td class="row1" align="center" valign="middle"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/whosonline.gif" alt="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" /></td>
		<?php } ?>

		<td class="row1" width="100%"><div id="mChatStats" class="mChatStats"><?php if ($this->_rootref['MCHAT_USERS_LIST']) {  ?><a href="#" onclick="mChat.toggle('UserList'); return false;"><?php echo (isset($this->_rootref['MCHAT_USERS_COUNT'])) ? $this->_rootref['MCHAT_USERS_COUNT'] : ''; ?></a><?php } else { echo (isset($this->_rootref['MCHAT_USERS_COUNT'])) ? $this->_rootref['MCHAT_USERS_COUNT'] : ''; } ?>&nbsp;<?php echo ((isset($this->_rootref['L_MCHAT_ONLINE_EXPLAIN'])) ? $this->_rootref['L_MCHAT_ONLINE_EXPLAIN'] : ((isset($user->lang['MCHAT_ONLINE_EXPLAIN'])) ? $user->lang['MCHAT_ONLINE_EXPLAIN'] : '{ MCHAT_ONLINE_EXPLAIN }')); ?><br /><span id="mChatUserList"><?php echo (isset($this->_rootref['MCHAT_USERS_LIST'])) ? $this->_rootref['MCHAT_USERS_LIST'] : ''; ?></span></div><br clear="left" />
		<div class="mChatStats"><span id="mChatRefresh"><?php echo ((isset($this->_rootref['L_MCHAT_WHOIS_REFRESH_EXPLAIN'])) ? $this->_rootref['L_MCHAT_WHOIS_REFRESH_EXPLAIN'] : ((isset($user->lang['MCHAT_WHOIS_REFRESH_EXPLAIN'])) ? $user->lang['MCHAT_WHOIS_REFRESH_EXPLAIN'] : '{ MCHAT_WHOIS_REFRESH_EXPLAIN }')); ?></span><span id="mChatRefreshN" style="display: none;"><?php echo ((isset($this->_rootref['L_MCHAT_REFRESHING'])) ? $this->_rootref['L_MCHAT_REFRESHING'] : ((isset($user->lang['MCHAT_REFRESHING'])) ? $user->lang['MCHAT_REFRESHING'] : '{ MCHAT_REFRESHING }')); ?></span></div>
		</td>
	</tr>
	<?php if ($this->_rootref['LEGEND']) {  ?>

	<tr>
		<td class="row1"><b class="gensmall"><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?> :: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></b></td>
	</tr>
	<?php } ?>

</table>
<?php } if ($this->_rootref['MCHAT_ARCHIVE_MODE'] || $this->_rootref['MCHAT_CUSTOM_PAGE']) {  $this->_tpl_include('overall_footer.html'); } ?>