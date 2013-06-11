<?php if (!defined('IN_PHPBB')) exit; ?><div class="tabs-outer">
            	<a href="javascript:void(0);" title="Menu" class="toggleMenuButton"></a>
            	<ul class="tabs">
            		<!--<li id="faq-link"><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>-->
            		<?php if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li id="members-link"><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>"><span><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></span></a></li>
                    <li id="create-link"><a href="/signature" title="Create a Sig"><span>Create a Sig</span></a></li><?php } ?><!-- Add tabs below -->
<!--                        <li id="contacts-link"><a href="/board/viewforum.php?f=40"><span>Feedback</span></a></li>
-->						<li id="donate-link"> <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GYJWJEWBCT2P2" title="Donate to Enthst" target="_blank"> <span>Donate</span> </a> </li>
                  
            	</ul>
            </div>