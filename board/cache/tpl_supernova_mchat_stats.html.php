<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['MCHAT_INDEX_STATS'] && $this->_rootref['U_MCHAT']) {  ?>

	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" colspan="2"><h4><a href="<?php echo (isset($this->_rootref['U_MCHAT'])) ? $this->_rootref['U_MCHAT'] : ''; ?>#mChat"><?php echo ((isset($this->_rootref['L_WHO_IS_CHATTING'])) ? $this->_rootref['L_WHO_IS_CHATTING'] : ((isset($user->lang['WHO_IS_CHATTING'])) ? $user->lang['WHO_IS_CHATTING'] : '{ WHO_IS_CHATTING }')); ?></a></h4></td>
		</tr>
		<tr>
			<td class="row1" align="center" valign="middle"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/whosonline.gif" alt="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" /></td>
			<td class="row1" width="100%"><span class="genmed"><?php echo (isset($this->_rootref['MCHAT_INDEX_USERS_COUNT'])) ? $this->_rootref['MCHAT_INDEX_USERS_COUNT'] : ''; ?> <?php echo ((isset($this->_rootref['L_MCHAT_ONLINE_EXPLAIN'])) ? $this->_rootref['L_MCHAT_ONLINE_EXPLAIN'] : ((isset($user->lang['MCHAT_ONLINE_EXPLAIN'])) ? $user->lang['MCHAT_ONLINE_EXPLAIN'] : '{ MCHAT_ONLINE_EXPLAIN }')); ?><br /><?php echo (isset($this->_rootref['MCHAT_INDEX_USERS_LIST'])) ? $this->_rootref['MCHAT_INDEX_USERS_LIST'] : ''; ?></span></td>
		</tr>
	</table>
<?php } ?>