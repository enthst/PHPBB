<?php
/**
* phpBB_SEO Class
* www.phpBB-SEO.com
* @package Advanced phpBB3 SEO mod Rewrite
*/
if (!defined('IN_PHPBB')) {
	exit;
}
$this->cache_config['settings'] = array ( 'url_rewrite' => false, 'modrtype' => 1, 'sql_rewrite' => false, 'profile_inj' => false, 'profile_vfolder' => false, 'profile_noids' => false, 'rewrite_usermsg' => false, 'rewrite_files' => false, 'rem_sid' => false, 'rem_hilit' => true, 'rem_small_words' => false, 'virtual_folder' => false, 'cache_layer' => true, 'rem_ids' => false, 'copyrights' => array ( 'img' => true, 'txt' => '', 'title' => '', ), );
$this->cache_config['forum'] = array ( );
?>