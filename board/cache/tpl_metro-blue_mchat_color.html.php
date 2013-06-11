<?php if (!defined('IN_PHPBB')) exit; ?><div id="mChatColour" style="display: none; text-align: center">
						<table width="50%" style="margin-left: auto; margin-right: auto;">
							<tr align="center">
								<td valign="top">
									<script type="text/javascript">
									// <![CDATA[
										colorPalette('h', 15, 10);
									// ]]>
									</script>
								</td>
							</tr>
							<tr align="center">
								<td class="mChatColor"><input type="hidden" name="helpbox" class="mChatColor helpline" value="<?php echo ((isset($this->_rootref['L_STYLES_TIP'])) ? $this->_rootref['L_STYLES_TIP'] : ((isset($user->lang['STYLES_TIP'])) ? $user->lang['STYLES_TIP'] : '{ STYLES_TIP }')); ?>" /></td>
							</tr>
						</table>
					</div>