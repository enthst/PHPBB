<?php if (!defined('IN_PHPBB')) exit; if ($this->_tpldata['DEFINE']['.']['SN']) {  ?>


####################################################
SUPERNOVA Configuation file for Forum Administrators
####################################################

Variables you can configure below: 

$SN_COLOUR_SWITCHER = Choose "Colour switcher" box on nav bar?  1 = enabled/visible, 0 = disabled/hidden.
$SN_ANIMATE = Animate transition between style colours? 1 = yes, 0 = no.

$SN_TOOLTIP = Show tooltip when hovering over colour switcher?  1 = yes, 0 = no.
$SN_TOOLTIP_TEXT = The text to display in the tooltip (Useful for boards using a foreign language).


$SN_DRAGGABLE_CATEGORIES = Allow your members to re-order the category list? 1 = yes, 0 = no.
(Note: Layout is unique to each computer. Order is saved using cookies, will revert to original when cookies cleared.)

$SN_AUTHOR_COLUMN = Show an "Author" column on viewforum.php? 1 = yes, 0 = no.

$SN_PROFILES_ON_LEFT = Display poster profiles on left side of viewtopic? 1 = left, 0 = right.

<?php } $this->_tpldata['DEFINE']['.']['SN_COLOUR_SWITCHER'] = '1'; $this->_tpldata['DEFINE']['.']['SN_ANIMATE'] = '1'; $this->_tpldata['DEFINE']['.']['SN_TOOLTIP'] = '1'; $this->_tpldata['DEFINE']['.']['SN_TOOLTIP_TEXT'] = 'Choose Style Colour'; $this->_tpldata['DEFINE']['.']['SN_DRAGGABLE_CATEGORIES'] = '1'; $this->_tpldata['DEFINE']['.']['SN_AUTHOR_COLUMN'] = '1'; $this->_tpldata['DEFINE']['.']['SN_PROFILES_ON_LEFT'] = '0'; ?>