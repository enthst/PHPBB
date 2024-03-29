<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && ! $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<div class="sn-stat-info" style="background-image: url('<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/lock.png');">
	<form method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" class="headerspace">
	<h3><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &bull; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>
		<fieldset class="quick-login">
			<label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label>&nbsp;<input type="text" name="username" id="username" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" />
			<label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label>&nbsp;<input type="password" name="password" id="password" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" />
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

				| <label for="autologin"><a href="#autologin" class="fakecheck" id="fakeautologin" style="float: none; display: inline;"><strong style="font-size: 10px;"><?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></strong></a><input type="checkbox" name="autologin" id="autologin" style="display: none;" /></label>
			<?php } ?>

			<input type="submit" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button2" />
			<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

		</fieldset>
	</form>
</div>
<?php } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

<div class="sn-stat-info" style="background-image: url('<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/who-is-online.png');">
	<?php if ($this->_rootref['U_VIEWONLINE']) {  ?><h3><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a></h3><?php } else { ?><h3><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></h3><?php } ?>

	<p><?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /> <br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>

	<?php if ($this->_rootref['LEGEND']) {  ?><br /><strong style="font-size: 12px;"><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></strong><?php } ?></p>
</div>
<?php } $this->_tpl_include('mchat_stats.html'); if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

<div class="sn-stat-info" style="background-image: url('<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/birthdays.png');">
	<h3><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></h3>
	<p><?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?></p>
</div>
<?php } if ($this->_rootref['NEWEST_USER']) {  ?>

<div class="sn-stat-info" style="background-image: url('<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/statistics.png');">
	<h3><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></h3>
	<p><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?></p>
</div>
<?php } $this->_tpl_include('overall_footer.html'); ?>