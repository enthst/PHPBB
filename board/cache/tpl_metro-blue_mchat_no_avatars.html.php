<?php if (!defined('IN_PHPBB')) exit; $_mchatrow_count = (isset($this->_tpldata['mchatrow'])) ? sizeof($this->_tpldata['mchatrow']) : 0;if ($_mchatrow_count) {for ($_mchatrow_i = 0; $_mchatrow_i < $_mchatrow_count; ++$_mchatrow_i){$_mchatrow_val = &$this->_tpldata['mchatrow'][$_mchatrow_i]; ?>

<div id="mess<?php echo $_mchatrow_val['MCHAT_MESSAGE_ID']; ?>" class="mChatBG<?php echo $_mchatrow_val['MCHAT_CLASS']; ?> mChatHover">
	<span style="float:left;">
		<?php echo $_mchatrow_val['MCHAT_TIME']; ?> - 
    <?php if (! $this->_rootref['MCHAT_ARCHIVE_MODE'] && $this->_rootref['MCHAT_ADD_MESSAGE']) {  if ($this->_rootref['MCHAT_ALLOW_BBCODES']) {  if ($_mchatrow_val['MCHAT_USERNAME_COLOR']) {  ?>

            	<a class="mChatScriptLink" href="#" onclick="insert_text('&#64;&nbsp;[b][color=<?php echo $_mchatrow_val['MCHAT_USERNAME_COLOR']; ?>]<?php echo $_mchatrow_val['MCHAT_USERNAME']; ?>[/color][/b], ', false); return false;" title="<?php echo ((isset($this->_rootref['L_MCHAT_RESPOND'])) ? $this->_rootref['L_MCHAT_RESPOND'] : ((isset($user->lang['MCHAT_RESPOND'])) ? $user->lang['MCHAT_RESPOND'] : '{ MCHAT_RESPOND }')); ?>">
                	<span style="color: <?php echo $_mchatrow_val['MCHAT_USERNAME_COLOR']; ?>">
                    	<strong>&#64;</strong>
					</span>
				</a>
			<?php } else { ?>

            	<a href="#" class="mChatScriptLink" onclick="insert_text('&#64;&nbsp;[b]<?php echo $_mchatrow_val['MCHAT_USERNAME']; ?>[/b], ', false); return false;" title="<?php echo ((isset($this->_rootref['L_MCHAT_RESPOND'])) ? $this->_rootref['L_MCHAT_RESPOND'] : ((isset($user->lang['MCHAT_RESPOND'])) ? $user->lang['MCHAT_RESPOND'] : '{ MCHAT_RESPOND }')); ?>">
                	<strong>&#64;</strong>
				</a>
			<?php } } else { ?>

        	<a href="#" class="mChatScriptLink" onclick="insert_text('&#64;&nbsp;<?php echo $_mchatrow_val['MCHAT_USERNAME']; ?>, ', false); return false;" title="<?php echo ((isset($this->_rootref['L_MCHAT_RESPOND'])) ? $this->_rootref['L_MCHAT_RESPOND'] : ((isset($user->lang['MCHAT_RESPOND'])) ? $user->lang['MCHAT_RESPOND'] : '{ MCHAT_RESPOND }')); ?>">&#64;</a>
		<?php } ?>

        &nbsp;
	<?php } ?>

		<?php echo $_mchatrow_val['MCHAT_USERNAME_FULL']; ?> : <?php echo $_mchatrow_val['MCHAT_MESSAGE']; ?>

	</span>
	<span style="float:right;">
		<?php if ($this->_rootref['MCHAT_ALLOW_IP']) {  ?>

        	<a href="<?php echo $_mchatrow_val['MCHAT_U_WHOIS']; ?>" onclick="popup(this.href, 750, 500); return false;">
            	<img src="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>mchat/ip.gif" alt="<?php echo ((isset($this->_rootref['L_MCHAT_IP'])) ? $this->_rootref['L_MCHAT_IP'] : ((isset($user->lang['MCHAT_IP'])) ? $user->lang['MCHAT_IP'] : '{ MCHAT_IP }')); ?> <?php echo $_mchatrow_val['MCHAT_USER_IP']; ?>" title="<?php echo ((isset($this->_rootref['L_MCHAT_IP'])) ? $this->_rootref['L_MCHAT_IP'] : ((isset($user->lang['MCHAT_IP'])) ? $user->lang['MCHAT_IP'] : '{ MCHAT_IP }')); ?> <?php echo $_mchatrow_val['MCHAT_USER_IP']; ?>" class="mChatImage" />
			</a>
		<?php } if ($_mchatrow_val['MCHAT_ALLOW_BAN']) {  ?> 
        	<a href="<?php echo $_mchatrow_val['MCHAT_U_BAN']; ?>">
            	<img src="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>mchat/ban.gif" alt="<?php echo ((isset($this->_rootref['L_MCHAT_PERMISSIONS'])) ? $this->_rootref['L_MCHAT_PERMISSIONS'] : ((isset($user->lang['MCHAT_PERMISSIONS'])) ? $user->lang['MCHAT_PERMISSIONS'] : '{ MCHAT_PERMISSIONS }')); ?>" title="<?php echo ((isset($this->_rootref['L_MCHAT_PERMISSIONS'])) ? $this->_rootref['L_MCHAT_PERMISSIONS'] : ((isset($user->lang['MCHAT_PERMISSIONS'])) ? $user->lang['MCHAT_PERMISSIONS'] : '{ MCHAT_PERMISSIONS }')); ?>" class="mChatImage" />
			</a>
		<?php } if ($_mchatrow_val['MCHAT_ALLOW_EDIT']) {  ?> 
        	<a href="#" onclick="mChat.edit('<?php echo $_mchatrow_val['MCHAT_MESSAGE_ID']; ?>'); return false;">
            	<img src="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>mchat/edit.gif" alt="<?php echo ((isset($this->_rootref['L_MCHAT_EDIT'])) ? $this->_rootref['L_MCHAT_EDIT'] : ((isset($user->lang['MCHAT_EDIT'])) ? $user->lang['MCHAT_EDIT'] : '{ MCHAT_EDIT }')); ?>" title="<?php echo ((isset($this->_rootref['L_MCHAT_EDIT'])) ? $this->_rootref['L_MCHAT_EDIT'] : ((isset($user->lang['MCHAT_EDIT'])) ? $user->lang['MCHAT_EDIT'] : '{ MCHAT_EDIT }')); ?>" class="mChatImage" />
			</a>
		<?php } ?>

		<input type="hidden" id="edit<?php echo $_mchatrow_val['MCHAT_MESSAGE_ID']; ?>" value="<?php echo $_mchatrow_val['MCHAT_MESSAGE_EDIT']; ?>" />
        <?php if ($_mchatrow_val['MCHAT_ALLOW_DEL']) {  ?> 
        <a href="#" onclick="mChat.del('<?php echo $_mchatrow_val['MCHAT_MESSAGE_ID']; ?>'); return false;">
			<img src="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>mchat/del.gif" alt="<?php echo ((isset($this->_rootref['L_MCHAT_DELITE'])) ? $this->_rootref['L_MCHAT_DELITE'] : ((isset($user->lang['MCHAT_DELITE'])) ? $user->lang['MCHAT_DELITE'] : '{ MCHAT_DELITE }')); ?>" title="<?php echo ((isset($this->_rootref['L_MCHAT_DELITE'])) ? $this->_rootref['L_MCHAT_DELITE'] : ((isset($user->lang['MCHAT_DELITE'])) ? $user->lang['MCHAT_DELITE'] : '{ MCHAT_DELITE }')); ?>" class="mChatImage" />
		</a><?php } ?>

	</span>
</div>
<?php }} ?>