<?php exit; ?>
1370872419
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM wsq_styles s, wsq_styles_template t, wsq_styles_theme c, wsq_styles_imageset i WHERE s.style_id = 3 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
98608
a:1:{i:0;a:11:{s:8:"style_id";s:1:"3";s:8:"theme_id";s:1:"3";s:10:"theme_data";s:98202:"/*  phpBB3 Style Sheet
    --------------------------------------------------------------
	Style name:			Metro Blue
	Based on style:		prosilver
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		PixelGoose Studio ( http://pixelgoose.com/ )
    --------------------------------------------------------------
*/

/* General Markup Styles
---------------------------------------- */

* {
	/* Reset browsers default margin, padding and font sizes */
	margin: 0;
	padding: 0;
}

html {
	/*font-size: 0.813em;*/
	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-IE browsers */
	height: 101%;
}

body {
	/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */
	font-family: 'Open Sans', sans-serif;
	color: #828282;
	background-color: #F6F6F6;
	/*font-size: 62.5%;			 This sets the default font size to be equivalent to 10px */
	font-size: 0.813em;
	margin: 0;
	padding: 12px 0;
}

h1 {
	/* Forum name */
	font-family: 'Open Sans', sans-serif;
	margin-right: 200px;
	color: #FFFFFF;
	margin-top: 15px;
	font-weight: bold;
	font-size: 2em;
	letter-spacing: -1px;
}

h2 {
	/* Forum header titles */
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
	color: #3f3f3f;
	font-size: 2em;
	margin: 0.8em 0 0.2em 0;
	letter-spacing: -1px;
}

h2.solo {
	margin-bottom: 1em;
}
#message h2, #confirm h2 {
	border-bottom: solid 1px #E4E4E4;
}
h3 {
	/* Sub-headers (also used as post headers, but defined later) */
	font-family: 'Open Sans', sans-serif;
	font-size: 1.077em;
	color: #989898;
}

h4 {
	/* Forum and topic list titles */
	font-family: 'Open Sans', sans-serif;
	font-size: 1.3em;
}

p {
	line-height: 1.3em;
	margin-bottom: 1.5em;
}

img {
	border-width: 0;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}
hr {
	/* Also see tweaks.css */
	border: 0 none #FFFFFF;
	border-top: 1px solid #E4E4E4;
	height: 1px;
	margin: 6px 0 12px;
	display: block;
	clear: both;
}

hr.dashed {
	border-top: 1px solid #E4E4E4;
	margin: 10px 0;
}

hr.divider {
	display: none;
}

p.right {
	text-align: right;
}

/* Main blocks
---------------------------------------- */
#wrap {
	width: 1180px;
	margin: 0 auto;
}

#simple-wrap {
	padding: 6px 12px;
	background-color: #fff;
	border: solid 1px #E4E4E4;
	margin: 0 12px;
}
#simple-wrap h2 {
	border-bottom: solid 1px #E4E4E4;
}
#page-body {
	clear: both;
	overflow: hidden;
}

#page-footer {
	clear: both;
}

#page-footer h3 {
	margin-top: 20px;
}


/* Search box
--------------------------------------------- */
.search-box {
	color: #43A6DF;
	float: left;
	white-space: nowrap; /* For Opera */
}
.search-box-inner {
	display: inline-block;
    height: 28px;
    width: 250px;
    background-color: #FFFFFF;
    border: 1px solid #E4E4E4;
    height: 26px;
	padding: 2px;	
}
.search-box #keywords {
    height: 20px;
    width: 200px;
	background-color: #FFF;
}

.search-box input {
	border: 1px solid #b0b0b0;
}
.search-box .inputbox {
	padding: 2px 0 2px 6px;
}
.topic-actions .search-box {
	margin: 0 0 12px;
}
/* .button1 style defined later, just a few tweaks for the search button version */
.search-box input.button1 {
	padding: 1px 5px;
}

.search-box li {
	text-align: right;
	margin-top: 4px;
}

.search-box img {
	vertical-align: middle;
	margin-right: 3px;
}
.search-adv-link {
	line-height: 31px;
	display: inline-block;

}
.search-form {
	overflow: hidden;
}
/* Site description and logo */
#site-description {
	float: left;
	width: 70%;
}

#site-description h1 {
	margin-right: 0;
}


/* Header and tabs
---------------------------------------- */

#above-headerbar {
	height: 36px;
	margin-bottom: 12px;
}
#header {
	height: 120px;
	background-color: #43A6DF;
	margin-bottom: 12px;
	position: relative;
}
#header #logo {
	position: absolute;
	left: 12px;
	bottom: 12px;
}
#header .tabs {
	float: right;
	padding: 0;
	margin: 0;
	list-style-type: none;
}
#header li {
	float: left;
	padding: 0;
	margin: 0;
	height: 120px;
	width: 120px;
	border-left: solid 12px #F6F6F6;
}
#header li a {
	color: #fff;
	height: 120px;
	width: 120px;
	display: block;
	position: relative;
	font-size: 1.231em;
	text-transform: lowercase;
}
#header li a:hover {
	background-color: #2E3539;
}
#header li a span {
	position: absolute;
	left: 12px;
	bottom: 12px;
}
#header li#members-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-members.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}
#header li#faq-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-faq.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}
#header li#donate-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-donate.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}
#header li#contacts-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-contacts.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}
#header li#news-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-news.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}
#header li#sample-link a {
	background-image: url("{T_IMAGESET_PATH}/tab-icon-sample.png");
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: left top;	
}

#subheader-menu {
	background-color: #2E3539;
	height: 34px;
	margin-bottom: 12px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding: 7px 12px;
}
#subheader-menu .links.right {
	float: right;
}
#subheader-menu .links.right li {
	margin-right: 0;
}
#subheader-menu .links li {
	float: left;
	list-style: none;
	margin-right: 12px;
}
#subheader-menu .links li a {
	color: #ffffff;
}

#breadcrumbs {
	margin-bottom: 12px;
}
.navbit-arrow {
	margin: 0 6px;
	vertical-align: middle;
}
/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background: #ebebeb none repeat-x 0 0;
	color: #FFFFFF;
	margin-bottom: 4px;
	padding: 0 5px;
}

.navbar {
	padding: 12px 0;
	border-top: solid 1px #E4E4E4;
	border-bottom: solid 1px #E4E4E4;
	margin-bottom: 12px;
}

.forabg {
	background: #b1b1b1 none repeat-x 0 0;
	margin-bottom: 12px;
	clear: both;
}

.forumbg {
	background: #b1b1b1 none repeat-x 0 0;
	margin-bottom: 12px;
	clear: both;
}
.forum-moderators,
.forum-subforums {
	margin-top: 6px;
	font-size: 0.846em;
}
.forum-moderators + .forum-subforums {
	margin-top: 0;
}
.forum-name {
	padding-left: 12px;
}
.panel {
	margin-bottom: 12px;
	padding: 0 10px;
	color: #3f3f3f;
}
.panel.no-topics {
	padding: 48px 0;
	text-align: center;
	font-size: 1.231em;
	background-color: #fff;
}
.panel.bg2 {
	border: 0;
	background-color: transparent;
	padding: 0;
}
.post {
	padding: 12px;
	margin-bottom: 12px;
	background-repeat: no-repeat;
	background-position: 100% 0;
	border: solid 1px #E4E4E4;
}
#preview {
	overflow: hidden;
}
.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

.bg1	{ background-color: #f7f7f7;}
.bg2	{ background-color: #f2f2f2; }
.bg3	{ background-color: #ebebeb; }

.rowbg {
	margin: 5px 5px 2px 5px;
}

.ucprowbg {
	background-color: #e2e2e2;
}

.fieldsbg {
	background-color: #eaeaea;
}



/* Horizontal lists
----------------------------------------*/

.user-links {
	float: right;
}
.user-links li {
	float: left;
	list-style-image: none;
	list-style-type: none;
	margin-right: 12px;
}
.user-links li:last-child {
	margin-right: 0px;
}

.user-links {
	/*font-size: 1.077em;*/
}
.user-links, .user-links a {
	line-height: 31px;
}


ul.linklist {
	display: block;
	margin: 0;
}

ul.linklist li {
	display: block;
	list-style-type: none;
	float: left;
	width: auto;
	margin-right: 5px;
	line-height: 2.2em;
}

ul.linklist li.rightside, p.rightside {
	float: right;
	margin-right: 0;
	margin-left: 5px;
	text-align: right;
}

ul.navlinks {
	padding-bottom: 1px;
	margin-bottom: 1px;
	border-bottom: 1px solid #FFFFFF;
	font-weight: bold;
}

ul.leftside {
	float: left;
	margin-left: 0;
	margin-right: 5px;
	text-align: left;
}

ul.rightside {
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	text-align: right;
}
.thread-icons {
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	float: right;
}
.thread-icons li {
	float: left;
}

/* Table styles
----------------------------------------*/
table.table1 {
	/* See tweaks.css */
}

#ucp-main table.table1 {
	padding: 2px;
}

table.table1 thead th {
	font-weight: normal;
	color: #FFFFFF;
	line-height: 1.3em;
}

table.table1 thead th span {
	padding-left: 7px;
}

table.table1 tbody tr {
	border: 1px solid #E4E4E4;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #f6f6f6;
	color: #000;
}

table.table1 td {
	color: #6a6a6a;
}

table.table1 tbody td {
	padding: 5px;
	border-top: 1px solid #E4E4E4;
}

table.table1 tbody th {
	padding: 5px;
	border-bottom: 1px solid #E4E4E4;
	text-align: left;
	color: #333333;
	background-color: #FFFFFF;
}

/* Specific column styles */
table.table1 .name		{ text-align: left; }
table.table1 .posts		{ text-align: center !important; width: 7%; }
table.table1 .joined	{ text-align: left; width: 15%; }
table.table1 .active	{ text-align: left; width: 15%; }
table.table1 .mark		{ text-align: center; width: 7%; }
table.table1 .info		{ text-align: left; width: 30%; }
table.table1 .info div	{ width: 100%; white-space: normal; overflow: hidden; }
table.table1 .autocol	{ line-height: 2em; white-space: nowrap; }
table.table1 thead .autocol { padding-left: 1em; }

table.table1 span.rank-img {
	float: right;
	width: auto;
}

table.info td {
	padding: 3px;
}

table.info tbody th {
	padding: 3px;
	text-align: right;
	vertical-align: top;
	color: #000000;
	font-weight: normal;
}

.forumbg table.table1 {
	margin: 0;
}

.forumbg-table > .inner {
	margin: 0 -1px;
}


/* Misc layout styles
---------------------------------------- */
/* column[1-2] styles are containers for two column layouts 
   Also see tweaks.css */
.column1 {
	float: left;
	clear: left;
	width: 49%;
}

.column2 {
	float: right;
	clear: right;
	width: 49%;
}

/* General classes for placing floating blocks */
.left-box {
	float: left;
	width: auto;
	text-align: left;
}

.right-box {
	float: right;
	width: auto;
	text-align: right;
}

dl.details {
	/*font-size: 1.1em;*/
}

dl.details dt {
	float: left;
	clear: left;
	width: 30%;
	text-align: right;
	color: #000000;
	display: block;
}

dl.details dd {
	margin-left: 0;
	padding-left: 5px;
	margin-bottom: 5px;
	float: left;
	width: 65%;
}

.dark-header {
	background-color: #2E3539;
	line-height: 48px;
	padding: 0 12px;
	color: #ffffff;
	font-weight: normal;
	clear: both;
}
.dark-header a {
	color: #ffffff !important;
}
.dark-header-content {
	background-color: #ffffff;
	padding: 12px;
    border-bottom: 1px solid #E4E4E4;
    border-left: 1px solid #E4E4E4;
    border-right: 1px solid #E4E4E4;
	margin-bottom: 12px;
}
/* Pagination
---------------------------------------- */
.pagination {
	height: 1%; /* IE tweak (holly hack) */
	width: auto;
	text-align: right;
	margin-top: 5px;
	float: right;
}

.pagination span.page-sep {
	display: none;
}

li.pagination {
	margin-top: 0;
}

.pagination strong, .pagination b {
	font-weight: normal;
}

.pagination span strong {
	padding: 2px 6px;
	margin: 0 1px;
	font-weight: normal;
	color: #FFFFFF;
	background-color: #bfbfbf;
	border: 1px solid #bfbfbf;
	font-size: 0.9em;
}

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	font-weight: normal;
	text-decoration: none;
	color: #747474;
	margin: 0 1px;
	padding: 2px 6px;
	background-color: #eeeeee;
	border: 1px solid #bababa;
	font-size: 0.9em;
	line-height: 1.5em;
}

.pagination span a:hover {
	border-color: #d2d2d2;
	background-color: #d2d2d2;
	color: #FFF;
	text-decoration: none;
}

.pagination img {
	vertical-align: middle;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	display: block;
	float: right;
	width: auto;
	margin-top: 0;
	padding: 1px 0 1px 15px;
	font-size: 0.9em;
	background: none 0 50% no-repeat;
}

.row .pagination span a, li.pagination span a {
	background-color: #FFFFFF;
}

.row .pagination span a:hover, li.pagination span a:hover {
	background-color: #d2d2d2;
}

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
	float: right;
	width: auto;
	padding-left: 5px;
	margin-left: 5px;
	margin-top: 10px;
	text-align: right;
}

.copyright {
	padding: 5px;
	text-align: center;
	color: #555555;
}

.small {
	font-size: 0.9em !important;
}

.titlespace {
	margin-bottom: 15px;
}

.headerspace {
	margin-top: 12px;
}

.error {
	color: #bcbcbc;
	font-weight: bold;
	font-size: 1em;
}

.reported {
	background-color: #f7f7f7;
}

li.reported:hover {
	background-color: #ececec;
}
.reported + .reported {
    border-top: none !important;
}
div.rules {
	padding: 12px;
	margin: 12px 0;
}

div.rules ul, div.rules ol {
	margin-left: 20px;
}

p.rules {
	background-color: #ececec;
	background-image: none;
	padding: 5px;
}

p.rules img {
	vertical-align: middle;
}

p.rules a {
	vertical-align: middle;
	clear: both;
}
.rules-header {
	font-size: 1.231em;
	display: block;
	font-weight: 600;
	margin-bottom: 6px;
}
.rules-header a {
	font-weight: 600;
	text-decoration: underline !important;
}
.rules-header a:hover {
	text-decoration: none !important;
}
#top {
	position: absolute;
	top: -20px;
}

.clear {
	display: block;
	clear: both;
	font-size: 1px;
	line-height: 1px;
	background: transparent;
}
.trigger {
    background: url("{T_THEME_PATH}/images/collapse-icon.png") no-repeat;
    width: 32px;
    height: 17px;
    cursor: pointer;
    float: right;
    position: relative;
    z-index: 9998;
    margin-top: -21px;
}

.active {background-position: left top;}
.inactive {background-position: left bottom;}

/* Animation
---------------------------------------- */

#header .tabs li a,
.topiclist.forums .row, .topiclist.topics .row,
.button1, .button2,
.inputbox,
#tabs li span,
#cp-menu #navigation li a,
table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	-ms-transition: all 0.3s ease 0s;
	-o-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
}
.search-box .button2 {
	transition: none;
	-webkit-transition: none;
	-moz-transition: none;
	-ms-transition: none;
	-o-transition: none;
}



/* Popup Login
---------------------------------------- */

#mask {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.6;
	z-index: 999;
}

.login-popup {
	display:none;
	width: 364px;
	background: #fff;
	padding: 16px 0; 	
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #434343; /* CSS3 */
	-moz-box-shadow: 0px 0px 20px #434343; /* Firefox */
	-webkit-box-shadow: 0px 0px 20px #434343; /* Safari, Chrome */
}
#navbar_username,
#navbar_password_hint,
#navbar_password {
	width: 254px;
	padding: 0 12px 0 32px;
	border: solid 1px #ebebeb;
	height: 40px;
	line-height: 40px;
	background-attachment: scroll;
	background-image: url("{T_THEME_PATH}/images/login-icons.png") !important;
	background-repeat: no-repeat;
	background-color: #FFF;
	outline: none !important;
	font-size: 11px;
}
#navbar_username {
	background-position: 12px 0;
}

#navbar_password_hint,
#navbar_password {
	background-position: 12px -40px;
}
.navbar_username_outer,
.navbar_password_outer {
	padding: 12px 32px;
}
.navbar_username_outer label,
.navbar_password_outer label {
	font-size: 11px;
}
.navbar_username_outer.active,
.navbar_password_outer.active {
	padding: 12px 32px 12px 26px;
	background-color: #f2f2f2;
	border-left: solid 6px #43A6DF;
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
}
.quick-login {
	border-bottom: solid 1px #ebebeb;
	margin-bottom: 12px;
}
.login-buttons {
	padding: 12px 32px;
}
#autologin_label {
	font-size: 11px;
	cursor: pointer;
	float: right;
}
#login-box .register-link {
	padding: 12px 32px;	
}

img.close-button { 
	float: right; 
	margin: -10px 6px 0 0;
}
#login-text {
	font: 24px 'Open Sans',sans-serif;
	color: #43A6DF;
	text-transform: lowercase;
	padding: 0 32px;
	margin-bottom: 12px;
}
.login-popup fieldset { 
	border:none; 
}
.login-link {
	display: none;
}

/* Sidebar blocks
---------------------------------------- */

#sidebar {
	float: left;
	width: 252px;
	margin-bottom: 12px;
}
#page-body-inner {
	float: left;
	width: 916px;
	margin-right: 12px;
}
.no-sidebar#page-body-inner {
	width: 100%;
	margin-right: 0;
}

#sidebar + #page-body-inner .forabg,
#sidebar + #page-body-inner .dark-header {
	clear: none;
}
.sidebar-block {
	margin-bottom: 12px;
}
.sidebar-block:last-child {
	margin-bottom: 0;
}
.sidebar-block-header {
	background-color: #2E3539;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: normal;
    padding: 14px 12px;
    letter-spacing: 0;
    margin: 0;
}
.sidebar-block-content {
    background: #FFFFFF;
    border: solid 1px #E4E4E4;
    color: #424242;
    padding: 16px 12px;
}
#sidebar ul {
	list-style-position: inside;
	margin-bottom: 1.5em;
}




/* Prefooter blocks
---------------------------------------- */

.prefooter-blocks {
	margin-bottom: 12px;
	overflow: hidden;
	clear: both;
}
.prefooter-blocks h2 {
	color: #FFF;
    font-size: 32px;
    font-weight: 300;
    margin-bottom: 6px;
    margin-top: 0;
    text-transform: lowercase;
    line-height: 1.23;
}
.prefooter-blocks h2, .prefooter-blocks h3, .prefooter-blocks h4 {
	color: #FFF;
}
#container1 {
	width: 100%;
	float: left;
	background-color: #2E3539;
	position: relative;
	right: 12px;
}
#container2 {
	width: 100%;
	float: left;	
	background-color: #F6F6F6;
	position: relative;
	right: 252px;
}
#container3 {
	width: 100%;
	float: left;
	background-color: #43A6DF;
	overflow: hidden;
}
#col1 {
    float: left;
    left: 264px;
    margin-right: -264px;
    padding-right: 276px !important;
    position: relative;
    width: 100%;
}
#col2 {
	width: 252px;
	float: right;
	position: relative;
	left: 264px;
}
#col1, #col2 {
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	padding: 24px 12px;
	color: #FFF;
}

.prefooter-block-01 {
	float: left;
	width: 70%;
	padding-right: 12px;
}
.prefooter-block-01.single {
	width: auto;
	padding-right: 0;
}
.prefooter-block-01 p {
	margin-bottom: 1em;
	line-height: 1.3em;
}
.about-block p:last-child {
	margin-bottom: 0;
}
.prefooter-block-02 {
	float: left;
	width: 30%;
}
.prefooter-block-02 li {
	line-height: 1.3em;
	margin-bottom: 6px;
}
.prefooter-right {
	float: right;
	width: 244px;
}
.prefooter-block-03 {
	margin-bottom: 24px;
	overflow: hidden;
}
.social-icons ul li {
	float: left;
	margin-right: 6px;
	list-style-type: none;
}
.social-icons ul li a {
	display: block;
	width: 37px;
	height: 37px;
	background-image: url("{T_THEME_PATH}/images/social-icons.png");
	background-attachment: scroll;
	background-repeat: no-repeat;

}
.social-icons ul li a.twitter {
	background-position: -76px top;
}
.social-icons ul li a.twitter:hover {
	background-position: -76px -37px;
}
.social-icons ul li a.facebook {
	background-position: -38px top;
}
.social-icons ul li a.facebook:hover {
	background-position: -38px -37px;
}
.social-icons ul li a.youtube {
	background-position: -152px top;
}
.social-icons ul li a.youtube:hover {
	background-position: -152px -37px;
}
.social-icons ul li a.gplus {
	background-position: 0 top;
}
.social-icons ul li a.gplus:hover {
	background-position: 0 -37px;
}
.social-icons ul li a.myspace {
	background-position: -114px top;
}
.social-icons ul li a.myspace:hover {
	background-position: -114px -37px;
}
.prefooter-block-04 a {
	color: #ffffff;
	text-decoration: underline;
}
.prefooter-block-04 a:hover {
	color: #ffffff;
	text-decoration: none;
}
#footer_divider {
	border-bottom: 1px solid #E4E4E4;
	clear: both;
	padding-top: 48px;
}	

a.toggleMenuButton {
    background-image: url("{T_THEME_PATH}/images/toggleMenubg.png");
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: center center;
}
#subheader-menu li {
    background-image: url("{T_THEME_PATH}/images/submenu-icons.png");
    background-attachment: scroll;
    background-repeat: no-repeat;
}
/* Link Styles
---------------------------------------- */

/* Links adjustment to correctly display an order of rtl/ltr mixed content */
a {
	direction: ltr;
	unicode-bidi: embed;
}

a:link	{ color: #898989; text-decoration: none; }
a:visited	{ color: #898989; text-decoration: none; }
a:hover	{ color: #d3d3d3; text-decoration: underline; }
a:active	{ color: #d2d2d2; text-decoration: none; }

/* Coloured usernames */
.username-coloured {
	font-weight: bold;
	display: inline !important;
	padding: 0 !important;
}

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #ffffff;
	text-decoration: underline;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #ffffff;
	text-decoration: none;
}

/* Links for forum/topic lists */
a.forumtitle {
	font-size: 1.077em;
	font-weight: bold;
	text-decoration: none;
}

/* a.forumtitle:visited { color: #898989; } */

a.forumtitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.forumtitle:active {
	color: #898989;
}

a.topictitle {
    font-size: 1.077em;
	font-weight: bold;
	text-decoration: none;
}

/* a.topictitle:visited { color: #d2d2d2; } */

a.topictitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.topictitle:active {
	color: #898989;
}

/* Post body links */
.postlink {
	text-decoration: none;
	color: #d2d2d2;
	border-bottom: 1px solid #d2d2d2;
	padding-bottom: 0;
}

/* .postlink:visited { color: #bdbdbd; } */

.postlink:active {
	color: #d2d2d2;
}

.postlink:hover {
	background-color: #f6f6f6;
	text-decoration: none;
	color: #404040;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	border: none;
	text-decoration: underline;
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	text-decoration: underline;
	color: #d3d3d3;
}

/* CSS spec requires a:link, a:visited, a:hover and a:active rules to be specified in this order. */
/* See http://www.phpbb.com/bugs/phpbb3/59685 */
.postprofile a:active {
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}


/* Profile searchresults */	
.search .postprofile a {
	color: #898989;
	text-decoration: none; 
	font-weight: normal;
}

.search .postprofile a:hover {
	color: #d3d3d3;
	text-decoration: underline; 
}

/* Back to top of page */
.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}

a.top {
	background: none no-repeat top left;
	text-decoration: none;
	width: {IMG_ICON_BACK_TOP_WIDTH}px;
	height: {IMG_ICON_BACK_TOP_HEIGHT}px;
	display: block;
	float: right;
	overflow: hidden;
	letter-spacing: 1000px;
	text-indent: 11px;
}

a.top2 {
	background: none no-repeat 0 50%;
	text-decoration: none;
	padding-left: 15px;
}

/* Arrow links  */
a.up		{ background: none no-repeat left center; }
a.down		{ background: none no-repeat right center; }
a.left		{ background: none no-repeat 0px 50%; }
a.right		{ background: none no-repeat 100% 50%; }

a.block-link {
	display: block;
	margin: 12px 0;
}
a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 10px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: left center;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 10px;
}

a.down:hover {
	background-position: right bottom;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 12px;
}

a.left:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 0 50%;
}

a.right, a.right:active, a.right:visited {
	padding-right: 12px;
}

a.right:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 100% 50%;
}

/* invisible skip link, used for accessibility  */
.skiplink {
	position: absolute;
	left: -999px;
	width: 990px;
}

/* Feed icon in forumlist_body.html */
a.feed-icon-forum {
	float: right;
	margin: 3px;
}
/* Content Styles
---------------------------------------- */

ul.topiclist {
	display: block;
	list-style-type: none;
	margin: 0;
}

ul.forums {
	background: #ffffff none repeat-x 0 0;
}

ul.topiclist li {
	display: block;
	list-style-type: none;
	color: #777777;
	margin: 0;
}

ul.topiclist dl {
	position: relative;
}

ul.topiclist li.row dl {
	padding: 12px 0;
}

ul.topiclist dt {
	display: block;
	float: left;
	width: 50%;
	padding-left: 5px;
	padding-right: 5px;
}
ul.topiclist dt > span {
	padding-left: 12px;
}
ul.topiclist dd {
	display: block;
	float: left;
	padding: 4px 0;
}

ul.topiclist dfn {
	position: absolute;
	left: -999px;
	width: 990px;
}

ul.topiclist li.row dt a.subforum {
	background-image: none;
	background-position: 0 50%;
	background-repeat: no-repeat;
	position: relative;
	white-space: nowrap;
	padding: 0 0 0 16px;
}
.topiclist .header dt {
	font-size: 1.077em;
	padding-top: 14px;
}
.topiclist .header dt a {
	color: #ffffff !important;
	padding-left: 12px;
}
.topiclist .header dd {
	font-size: 0.923em;
	line-height: 48px;
}
.forum-image {
	float: left;
	padding-top: 5px;
	margin-right: 5px;
}

li.row {
    border-bottom: 1px solid #E4E4E4;
    border-left: 1px solid #E4E4E4;
    border-right: 1px solid #E4E4E4;
}

li.row strong {
	font-weight: normal;
	color: #000000;
}

li.row:hover {
	background-color: #F2F2F2;
}

li.row:hover dd {
	
}

li.header dt, li.header dd {
	border-left-width: 0;
	margin: 0;
	color: #FFFFFF;
	padding-top: 0;
	padding-bottom: 0;
}


li.header dd {
	margin-left: 1px;
}

li.header dl.icon {
	min-height: 0;
}

li.header dl.icon dt {
	/* Tweak for headers alignment when folder icon used */
	padding-left: 0;
	padding-right: 50px;
}

/* Forum list column styles */
dl.icon {
	min-height: 35px;
	background-position: 5px 12px;		/* Position of folder icon */
	background-repeat: no-repeat;
}

dl.icon dt {
	padding-left: 45px;					/* Space for folder icon */
	background-repeat: no-repeat;
	background-position: 5px 95%;		/* Position of topic icon */
}

dd.posts, dd.topics, dd.views {
	width: 8%;
	text-align: center;
	line-height: 2.2em;
	font-size: 0.846em;
}

/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
	list-style-position: inside;
	margin-left: 1em;
}

dl.icon dt li {
	display: list-item;
	list-style-type: inherit;
}

dd.lastpost {
	width: 25%;
	font-size: 0.846em;
}

dd.redirect {
	font-size: 1.1em;
	line-height: 2.5em;
}

dd.moderation {
	font-size: 1.1em;
}

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
	display: block;
	padding-left: 5px;
}

dd.time {
	width: auto;
	line-height: 200%;
	font-size: 1.1em;
}

dd.extra {
	width: 12%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.mark {
	float: right !important;
	width: 9%;
	text-align: center;
	line-height: 200%;
	font-size: 1.2em;
}

dd.info {
	width: 30%;
}

dd.option {
	width: 15%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.searchby {
	width: 47%;
	font-size: 1.1em;
	line-height: 1em;
}

ul.topiclist dd.searchextra {
	margin-left: 5px;
	padding: 0.2em 0;
	font-size: 1.1em;
	color: #333333;
	border-left: none;
	clear: both;
	width: 98%;
	overflow: hidden;
}

/* Container for post/reply buttons and pagination */
.topic-actions {
	margin-bottom: 3px;
	height: 28px;
	min-height: 28px;
	overflow: hidden;
}
div[class].topic-actions {
	height: auto;
}

/* Post body styles
----------------------------------------*/
.postbody {
	padding: 0;
	line-height: 1.48em;
	color: #333333;
	width: 76%;
	float: left;
	clear: both;
}

.postbody .ignore {
	font-size: 1.1em;
}

.postbody h3.first {
	/* The first post on the page uses this */
	font-size: 1.077em;
}

.postbody h3 {
	/* Postbody requires a different h3 format - so change it here */
	font-size: 1.077em;
	font-weight: 300;
	padding: 2px 0 0 0;
	margin: 0 0 0.3em 0 !important;
	text-transform: none;
	border: none;
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	line-height: 125%;
}

.postbody h3 img {
	/* Also see tweaks.css */
	vertical-align: bottom;
}

.postbody .content {
	border-top: solid 1px #E4E4E4;
	padding-top: 12px;
	margin-top: 6px;
}

.search .postbody {
	width: 68%
}

/* Topic review panel
----------------------------------------*/
#review {
	margin-top: 2em;
}
h3#review {
	border-bottom: 0;
}
#topicreview {
	overflow: auto;
	height: 300px;
}

#topicreview .postbody {
	width: auto;
	float: none;
	margin: 0;
	height: auto;
}

#topicreview .post {
	height: auto;
}

#topicreview h2 {
	border-bottom-width: 0;
}
#topicreview h3 {
	border-bottom-width: 0;
}
.post-ignore .postbody {
	display: none;
}

/* MCP Post details
----------------------------------------*/
#post_details
{
	/* This will only work in IE7+, plus the others */
	overflow: auto;
	max-height: 300px;
}

#expand
{
	clear: both;
}

/* Content container styles
----------------------------------------*/
.content {
	min-height: 3em;
	overflow: hidden;
	line-height: 1.5em;
	font-size: 1em;
	color: #333333;
	padding-bottom: 1px;
}

.content h2, .panel h2 {
	font-weight: normal;
	color: #43A6DF;
	font-size: 1.6em;
	margin-top: 0.5em;
	margin-bottom: 0.5em;
	padding-bottom: 0.5em;
}

.panel h3 {
	margin: 0.5em 0;
	font-size: 1.231em;
	border-bottom: solid 1px #E4E4E4;
}
.pm .postbody h3 {
	border-bottom: none;
}
.panel p {
	margin-bottom: 1em;
	line-height: 1.4em;
}
#qr_editor_div {
	overflow: hidden;
}
#qr_editor_div h2 {
	margin: 0 0 12px;
	border-bottom: solid 1px #E4E4E4;
}
.content p {
	margin-bottom: 1em;
	line-height: 1.4em;
}
#faqlinks {
	overflow: hidden;
}
dl.faq {
	margin-top: 1em;
	margin-bottom: 2em;
	line-height: 1.4em;
}

dl.faq dt {
	font-weight: bold;
	color: #333333;
	margin-bottom: 12px;
}

.content dl.faq {
	margin-bottom: 0.5em;
}

.content li {
	list-style-type: inherit;
}

.content ul, .content ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

.posthilit {
	background-color: #f3f3f3;
	color: #BCBCBC;
	padding: 0 2px 1px 2px;
}

.announce, .unreadpost {
	/* Highlight the announcements & unread posts box */
}

/* Post author */
p.author {
	margin: 0 15em 0.6em 0;
	padding: 0 0 5px 0;
	line-height: 1.2em;
	font-size: 0.846em;
}

/* Post signature */
.signature {
	margin-top: 24px;
	padding-top: 12px;
	border-top: 1px solid #E4E4E4;
	clear: left;
	line-height: 140%;
	overflow: hidden;
	width: 100%;
}

dd .signature {
	margin: 0;
	padding: 0;
	clear: none;
	border: none;
}

.signature li {
	list-style-type: inherit;
}

.signature ul, .signature ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

/* Post noticies */
.notice {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: auto;
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 1em;
	border-top: 1px dashed #CCCCCC;
	clear: left;
	line-height: 130%;
}

/* Jump to post link for now */
ul.searchresults {
	list-style: none;
	text-align: right;
	clear: both;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background: #ebebeb none 6px 8px no-repeat;
	border: 1px solid #dbdbdb;
	font-size: 0.95em;
	margin: 0.5em 1px 0 25px;
	overflow: hidden;
	padding: 5px;
}

blockquote blockquote {
	/* Nested quotes */
	background-color: #bababa;
	font-size: 1em;
	margin: 0.5em 1px 0 15px;	
}

blockquote blockquote blockquote {
	/* Nested quotes */
	background-color: #e4e4e4;
}

blockquote cite {
	/* Username/source of quoter */
	font-style: normal;
	font-weight: bold;
	margin-left: 20px;
	display: block;
	font-size: 0.9em;
}

blockquote cite cite {
	font-size: 1em;
}

blockquote.uncited {
	padding-top: 25px;
}

/* Code block */
dl.codebox {
	padding: 3px;
	background-color: #FFFFFF;
	border: 1px solid #d8d8d8;
	font-size: 1em;
}

dl.codebox dt {
	text-transform: uppercase;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 3px;
	font-size: 0.8em;
	font-weight: bold;
	display: block;
}

blockquote dl.codebox {
	margin-left: 0;
}

dl.codebox code {
	/* Also see tweaks.css */
	overflow: auto;
	display: block;
	height: auto;
	max-height: 200px;
	white-space: normal;
	padding-top: 5px;
	font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height: 1.3em;
	color: #8b8b8b;
	margin: 2px 0;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #000000; }
.syntaxdefault	{ color: #bcbcbc; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #585858; }
.syntaxstring	{ color: #a7a7a7; }

/* Attachments
----------------------------------------*/
.attachbox {
	float: left;
	width: auto; 
	margin: 5px 5px 5px 0;
	padding: 6px;
	background-color: #FFFFFF;
	border: 1px dashed #d8d8d8;
	clear: left;
}

.pm-message .attachbox {
	background-color: #f3f3f3;
}

.attachbox dt {
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

.attachbox dd {
	margin-top: 4px;
	padding-top: 4px;
	clear: left;
	border-top: 1px solid #d8d8d8;
}

.attachbox dd dd {
	border: none;
}

.attachbox p {
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attachbox p.stats
{
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attach-image {
	margin: 3px 0;
	width: 100%;
	max-height: 350px;
	overflow: auto;
}

.attach-image img {
	border: 1px solid #999999;
/*	cursor: move; */
	cursor: default;
}

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
	display: block;
	margin-bottom: 4px;
}

div.inline-attachment p {
	font-size: 100%;
}

dl.file {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	display: block;
}

dl.file dt {
	text-transform: none;
	margin: 0;
	padding: 0;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

dl.file dd {
	color: #666666;
	margin: 0;
	padding: 0;	
}

dl.thumbnail img {
	padding: 3px;
	border: 1px solid #666666;
	background-color: #FFF;
}

dl.thumbnail dd {
	color: #666666;
	font-style: italic;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.attachbox dl.thumbnail dd {
	font-size: 100%;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border: 1px solid #d2d2d2;
}

/* Post poll styles
----------------------------------------*/
fieldset.polls {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
}

fieldset.polls dl {
	margin-top: 5px;
	border-top: 1px solid #e2e2e2;
	padding: 5px 0 0 0;
	line-height: 120%;
	color: #666666;
}

fieldset.polls dl.voted {
	font-weight: bold;
	color: #000000;
}

fieldset.polls dt {
	text-align: left;
	float: left;
	display: block;
	width: 30%;
	border-right: none;
	padding: 0;
	margin: 0;
	font-size: 1.1em;
}

fieldset.polls dd {
	float: left;
	width: 10%;
	border-left: none;
	padding: 0 5px;
	margin-left: 0;
	font-size: 1.1em;
}

fieldset.polls dd.resultbar {
	width: 50%;
}

fieldset.polls dd input {
	margin: 2px 0;
}

fieldset.polls dd div {
	text-align: right;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
	padding: 0 2px;
	overflow: visible;
	min-width: 2%;
}

.pollbar1 {
	background-color: #aaaaaa;
	border-bottom: 1px solid #747474;
	border-right: 1px solid #747474;
}

.pollbar2 {
	background-color: #bebebe;
	border-bottom: 1px solid #8c8c8c;
	border-right: 1px solid #8c8c8c;
}

.pollbar3 {
	background-color: #D1D1D1;
	border-bottom: 1px solid #aaaaaa;
	border-right: 1px solid #aaaaaa;
}

.pollbar4 {
	background-color: #e4e4e4;
	border-bottom: 1px solid #bebebe;
	border-right: 1px solid #bebebe;
}

.pollbar5 {
	background-color: #f8f8f8;
	border-bottom: 1px solid #D1D1D1;
	border-right: 1px solid #D1D1D1;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	/* Also see tweaks.css */
	margin: 5px 0 10px 0;
	min-height: 80px;
	color: #666666;
	border-left: 1px solid #FFFFFF;
	width: 22%;
	float: right;
	display: inline;
}
.pm .postprofile {
	border-left: 1px solid #DDDDDD;
}

.postprofile dd, .postprofile dt {
	line-height: 1.2em;
	margin-left: 8px;
}

.postprofile strong {
	font-weight: normal;
	color: #000000;
}

.avatar {
	border: none;
	margin-bottom: 3px;
}

.online {
	background-image: none;
	background-position: 100% 0;
	background-repeat: no-repeat;
}
#viewprofile .panel {
	overflow: hidden;
}

/* Poster profile used by search*/
.search .postprofile {
	width: 30%;
}

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
	width: 60% !important;
}

dl.pmlist dt textarea {
	width: 95%;
}

dl.pmlist dd {
	margin-left: 65% !important;
	margin-bottom: 2px;
}
/* Button Styles
---------------------------------------- */

/* Rollover buttons
   Based on: http://wellstyled.com/css-nopreload-rollovers.html
----------------------------------------*/
.buttons {
	float: left;
	width: auto;
	height: auto;
}

/* Rollover state */
.buttons div {
	float: left;
	margin: 0 12px 0 0;
	background-position: 0 100%;
}

/* Rolloff state */
.buttons div a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
	position: relative;
	overflow: hidden;
}
/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
/*.buttons div span		{ display: none; }*/
/*.buttons div a:hover	{ background-image: none; }*/
.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}
.buttons div a:hover span	{ background-position: 0 100%; }

/* Big button images */
.reply-icon span	{ background: transparent none 0 0 no-repeat; }
.post-icon span		{ background: transparent none 0 0 no-repeat; }
.locked-icon span	{ background: transparent none 0 0 no-repeat; }
.pmreply-icon span	{ background: none 0 0 no-repeat; }
.newpm-icon span 	{ background: none 0 0 no-repeat; }
.forwardpm-icon span 	{ background: none 0 0 no-repeat; }

/* Set big button dimensions */
.buttons div.reply-icon		{ width: {IMG_BUTTON_TOPIC_REPLY_WIDTH}px; height: {IMG_BUTTON_TOPIC_REPLY_HEIGHT}px; }
.buttons div.post-icon		{ width: {IMG_BUTTON_TOPIC_NEW_WIDTH}px; height: {IMG_BUTTON_TOPIC_NEW_HEIGHT}px; }
.buttons div.locked-icon	{ width: {IMG_BUTTON_TOPIC_LOCKED_WIDTH}px; height: {IMG_BUTTON_TOPIC_LOCKED_HEIGHT}px; }
.buttons div.pmreply-icon	{ width: {IMG_BUTTON_PM_REPLY_WIDTH}px; height: {IMG_BUTTON_PM_REPLY_HEIGHT}px; }
.buttons div.newpm-icon		{ width: {IMG_BUTTON_PM_NEW_WIDTH}px; height: {IMG_BUTTON_PM_NEW_HEIGHT}px; }
.buttons div.forwardpm-icon	{ width: {IMG_BUTTON_PM_FORWARD_WIDTH}px; height: {IMG_BUTTON_PM_FORWARD_HEIGHT}px; }

/* Sub-header (navigation bar)
--------------------------------------------- */
a.print, a.sendemail, a.fontsize {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-align: left;
	background-repeat: no-repeat;
}

a.print {
	background-image: none;
	width: 22px;
}

a.sendemail {
	background-image: none;
	width: 22px;
}

a.fontsize {
	background-image: none;
	background-position: 0 -1px;
	width: 29px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

/* Icon images
---------------------------------------- */
.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout,
.icon-bookmark, .icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search {
	background-position: 0 50%;
	background-repeat: no-repeat;
	background-image: none;
	padding: 1px 0 0 17px;
}

/* Poster profile icons
----------------------------------------*/
ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 3px 3px 0;
	background: none;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { display:none; }
ul.profile-icons li a:hover { background-position: 0 100%; }

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 0;
}

.postbody ul.profile-icons li {
	margin: 0 3px;
}

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background: none top left no-repeat; }
.aim-icon, .aim-icon a			{ background: none top left no-repeat; }
.yahoo-icon, .yahoo-icon a		{ background: none top left no-repeat; }
.web-icon, .web-icon a			{ background: none top left no-repeat; }
.msnm-icon, .msnm-icon a			{ background: none top left no-repeat; }
.icq-icon, .icq-icon a			{ background: none top left no-repeat; }
.jabber-icon, .jabber-icon a		{ background: none top left no-repeat; }
.pm-icon, .pm-icon a				{ background: none top left no-repeat; }
.quote-icon, .quote-icon a		{ background: none top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a		{ background: none top left no-repeat; }
.warn-icon, .warn-icon a			{ background: none top left no-repeat; }
.edit-icon, .edit-icon a			{ background: none top left no-repeat; }
.delete-icon, .delete-icon a		{ background: none top left no-repeat; }
.info-icon, .info-icon a			{ background: none top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon a		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon a	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon a	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon a	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon a	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon a	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon a	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon a		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.quote-icon a	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }
ul.profile-icons li.report-icon a	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }
ul.profile-icons li.edit-icon a	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }
ul.profile-icons li.delete-icon a	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }
ul.profile-icons li.info-icon a	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }
ul.profile-icons li.warn-icon a	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }

/* Fix profile icon default margins */
ul.profile-icons li.edit-icon	{ margin: 0 0 0 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }
ul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; }
/* Control Panel Styles
---------------------------------------- */


/* Main CP box
----------------------------------------*/
#cp-menu {
	float:left;
	width: 19%;
	margin-top: 1em;
	margin-bottom: 5px;
}

#cp-main {
	float: left;
	width: 81%;
}

#cp-main .content {
	padding: 0;
}

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #bfbfbf;
}

#cp-main .panel p {
}

#cp-main .panel ol {
	margin-left: 2em;
}

#cp-main .panel li.row {
	border-bottom: 1px solid #cbcbcb;
	border-top: 1px solid #F9F9F9;
}

ul.cplist {
	margin-bottom: 5px;
	border-top: 1px solid #cbcbcb;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main table.table1 thead th {
	color: #333333;
	font-weight: bold;
	border-bottom: 1px solid #333333;
	padding: 5px;
}

#cp-main table.table1 tbody th {
	font-style: italic;
	background-color: transparent !important;
	border-bottom: none;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
}

#cp-main .pm-message {
	border: 1px solid #e2e2e2;
	margin: 10px 0;
	background-color: #FFFFFF;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
	margin-bottom: 6px;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

.tabs-container h2 {
	float: left;
	margin-bottom: 0px;
}

.tabs-container #minitabs {
	float: right;
	margin-top: 19px;
}

.tabs-container:after {
	display: block;
	clear: both;
	content: '';
}

/* CP tabbed menu
----------------------------------------*/
#tabs {
	line-height: normal;
	margin: 20px 0 -1px;
	min-width: 570px;
}

#tabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#tabs li {
	display: inline;
	margin: 0;
	padding: 0;
	font-size: 1em;
	font-weight: bold;
}
#tabs li.activetab a span {
	color: #ffffff;
	background-color: #2E3539 !important;
}
#tabs a {
	float: left;
	margin: 0 1px 0 0;
	padding: 0;
	text-decoration: none;
	position: relative;
	cursor: pointer;
}

#tabs a span {
	float: left;
	display: block;
	padding: 12px;
	white-space: nowrap;
	background-color: #43A6DF;
	color: #FFFFFF;
}


#tabs .activetab a {
	border-bottom: 1px solid #ebebeb;
}

#tabs .activetab a span {
}

#tabs a:hover {
}

#tabs a:hover span {
	background-color: #2E3539;
	color: #FFFFFF;
}

#tabs .activetab a:hover {
	background-position: 0 0;
}

#tabs .activetab a:hover span {
	color: #FFFFFF !important;
	background-position: 100% 0;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs {
	line-height: normal;
	margin: -20px 7px 0 0;
}

#minitabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#minitabs li {
	display: block;
	float: right;
	padding: 0 10px 4px 10px;
	font-size: 1em;
	font-weight: bold;
	background-color: #f2f2f2;
	margin-left: 2px;
}

#minitabs a {
}

#minitabs a:hover {
	text-decoration: none;
}

#minitabs li.activetab {
	background-color: #F9F9F9;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #333333;
}

/* UCP navigation menu
----------------------------------------*/
/* Container for sub-navigation list */
#navigation {
	width: 100%;
	padding-top: 37px;
}

#navigation ul {
	list-style:none;
}

/* Default list state */
#navigation li {
	margin: 1px 0;
	padding: 0;
	font-weight: bold;
	display: inline;
}

/* Link styles for the sub-section links */
#navigation a {
	display: block;
	padding: 12px 6px;
	margin: 1px 0;
	text-decoration: none;
	font-weight: bold;
	color: #333;
	background: #cfcfcf none repeat-y 100% 0;
}

#navigation a:hover {
	text-decoration: none;
	background-color: #c6c6c6;
	color: #bcbcbc;
	background-image: none;
}

#navigation #active-subsection a {
	display: block;
	color: #d3d3d3;
	background-color: #F9F9F9;
	background-image: none;
}

#navigation #active-subsection a:hover {
	color: #d3d3d3;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	border-bottom: none;
	padding: 0;
	margin-left: 10px;
	color: #333333;
}

#cp-main .panel {
	overflow: hidden;
}

#cp-main .pm {
	background-color: #FFFFFF;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: none;
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: none;
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: none;
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: none;
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: none;
}

/* Friends list */
.cp-mini {
	background-color: #f9f9f9;
	padding: 0 5px;
	margin: 10px 15px 10px 5px;
}

.cp-mini span.corners-top, .cp-mini span.corners-bottom {
	margin: 0 -5px;
}

dl.mini dt {
	font-weight: bold;
	color: #676767;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.reply-all a.left {
	background-position: 3px 60%;
}

.reply-all a.left:hover {
	background-position: 0px 60%;
}

.reply-all {
	font-size: 11px;
	padding-top: 5px;
}

/* PM Message history */
.current {
	color: #999999;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */
.pmlist li.bg1 {
	padding: 0 3px;
}

.pmlist li.bg2 {
	padding: 0 3px;
}

.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #bcbcbc;
	border-right-color: #bcbcbc;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	padding: 0;
	border: solid 3px #ffffff;
	border-width: 0 3px;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	padding: 0;
	border: solid 3px #c2c2c2;
	border-width: 0 3px;
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	padding: 0;
	border: solid 3px #bdbdbd;
	border-width: 0 3px;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	padding: 0;
	border: solid 3px #000000;
	border-width: 0 3px;
}

.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: #FFFFFF;
	border: 1px solid #CCC;
	text-align: center;
}

#gallery label:hover {
	background-color: #EEE;
}
/* Form Styles
---------------------------------------- */

/* General form styles
----------------------------------------*/
fieldset {
	border-width: 0;
	font-family: 'Open Sans', sans-serif;
}

input {
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	padding: 0 3px;
	font-family: 'Open Sans', sans-serif;
}

select {
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	border: 1px solid #DCDCDC;
	padding: 1px;
	background-color: #FAFAFA;
}

option {
	padding-right: 1em;
}

option.disabled-option {
	color: graytext;
}

textarea {
	font-family: 'Open Sans', sans-serif;
	width: 60%;
	padding: 2px;
	line-height: 1.4em;
	font-size: 1em;
}

label {
	cursor: default;
	padding-right: 5px;
	color: #676767;
}

label input {
	vertical-align: middle;
}

label img {
	vertical-align: middle;
}

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
	padding: 4px 0;
}

fieldset dt {
	float: left;	
	width: 40%;
	text-align: left;
	display: block;
}

fieldset dd {
	margin-left: 41%;
	vertical-align: top;
	margin-bottom: 3px;
}

/* Specific layout 1 */
fieldset.fields1 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields1 dd {
	margin-left: 15em;
	border-left-width: 0;
}

fieldset.fields1 {
	background-color: transparent;
}

fieldset.fields1 div {
	margin-bottom: 3px;
}

/* Set it back to 0px for the reCaptcha divs: PHPBB3-9587 */
fieldset.fields1 #recaptcha_widget_div div {
	margin-bottom: 0;
}

/* Specific layout 2 */
fieldset.fields2 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields2 dd {
	margin-left: 16em;
	border-left-width: 0;
}

/* Form elements */
dt label {
	font-weight: bold;
	text-align: left;
}

dd label {
	white-space: nowrap;
	color: #333;
}

dd input, dd textarea {
	margin-right: 3px;
}

dd select {
	width: auto;
}

dd textarea {
	width: 85%;
}

/* Hover effects */
fieldset dl:hover dt label {
	color: #000000;
}

fieldset.fields2 dl:hover dt label {
	color: inherit;
}

#timezone {
	width: 95%;
}

* html #timezone {
	width: 50%;
}

/* Quick-login on index page */
.homelogin {
	background-color: #fff;
	padding: 12px;
	border: solid 1px #e4e4e4;
	margin-bottom: 12px;
}
fieldset.quick-login {
	margin-top: 5px;
}

fieldset.quick-login input {
	width: auto;
}

fieldset.quick-login input.inputbox {
	width: 15%;
	vertical-align: middle;
	margin-right: 5px;
	background-color: #f3f3f3;
}

fieldset.quick-login label {
	white-space: nowrap;
	padding-right: 2px;
}

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
	text-align: center;
	margin: 3px 0 12px 0;
}

fieldset.display-options label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.display-options a {
	margin-top: 3px;
}

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
	text-align: right;
	line-height: 2em;
	white-space: nowrap;
	padding-right: 1em;
}

fieldset.display-actions label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.sort-options {
	line-height: 2em;
}

/* MCP forum selection*/
fieldset.forum-selection {
	margin: 5px 0 3px 0;
	float: right;
}

fieldset.forum-selection2 {
	margin: 13px 0 3px 0;
	float: right;
}

/* Jumpbox */
fieldset.jumpbox {
	text-align: right;
	margin-top: 12px;
	margin-bottom: 12px;
}

fieldset.quickmod {
	width: 50%;
	float: right;
	text-align: right;
	height: 2.5em;
}

/* Submit button fieldset */
fieldset.submit-buttons {
	text-align: center;
	vertical-align: middle;
	margin: 5px 0;
}

fieldset.submit-buttons input {
	vertical-align: middle;
	padding-top: 3px;
	padding-bottom: 3px;
}

/* Posting page styles
----------------------------------------*/

/* Buttons used in the editor */
#format-buttons {
	margin: 15px 0 2px 0;
}

#format-buttons input, #format-buttons select {
	vertical-align: middle;
}

/* Main message box */
#message-box {
	width: 80%;
}

#message-box textarea {
	width: 450px;
	height: 270px;
	min-width: 100%;
	max-width: 100%;
	color: #333333;
}

/* Emoticons panel */
#smiley-box {
	width: 17%;
	float: right;
}

#smiley-box img {
	margin: 3px;
}

/* Input field styles
---------------------------------------- */
.inputbox {
	background-color: #FFFFFF;
	border: 1px solid #c0c0c0;
	color: #333333;
	padding: 2px;
	cursor: text;
}

.inputbox:hover {
	border: 1px solid #eaeaea;
}

.inputbox:focus {
	border: 1px solid #eaeaea;
	color: #4b4b4b;
}

input.inputbox	{ width: 85%; }
input.medium	{ width: 50%; }
input.narrow	{ width: 25%; }
input.tiny		{ width: 125px; }

textarea.inputbox {
	width: 85%;
}

.autowidth {
	width: auto !important;
}

/* Form button styles
---------------------------------------- */
input.button1, input.button2 {
	font-size: 1em;
}

a.button1, input.button1, input.button3, a.button2, input.button2 {
	width: auto !important;
	padding: 3px 12px;
	font-family: 'Open Sans', sans-serif;
	color: #000;
	background: #FAFAFA none repeat-x top left;
	border: 0;
}

a.button1, input.button1 {
}

input.button3 {
	padding: 0;
	margin: 0;
	line-height: 5px;
	height: 12px;
	background-image: none;
	font-variant: small-caps;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
	border: 0;
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	text-decoration: none;
	color: #000000;
	padding: 6px 12px;
	line-height: 250%;
	vertical-align: text-bottom;
	background-position: 0 2px;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
	/*border: 1px solid #BCBCBC;*/
	background-color: #2E3539;
	color: #BCBCBC;
}

input.disabled {
	font-weight: normal;
	color: #666666;
}

/* Topic and forum Search */
.search-box {
	float: left;
}

.search-box .inputbox:hover,
.search-box .inputbox:focus {
	border: 0;
}

input.search {
	background-image: none;
	background-repeat: no-repeat;
	background-position: left 1px;
	padding-left: 6px;
}

.full { width: 95%; }
.medium { width: 50%;}
.narrow { width: 25%;}
.tiny { width: 10%;}
/* Style Sheet Tweaks

These style definitions are mainly IE specific 
tweaks required due to its poor CSS support.
-------------------------------------------------*/

* html table, * html select, * html input { font-size: 100%; }
* html hr { margin: 0; }
* html span.corners-top, * html span.corners-bottom { background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }
* html span.corners-top span, * html span.corners-bottom span { background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }

table.table1 {
	width: 99%;		/* IE < 6 browsers */
	/* Tantek hack */
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 100%;
}
html>body table.table1 { width: 100%; }	/* Reset 100% for opera */

* html ul.topiclist li { position: relative; }
* html .postbody h3 img { vertical-align: middle; }

/* Form styles */
html>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */

* html input.button1, * html input.button2 {
	padding-bottom: 0;
	margin-bottom: 1px;
}

/* Misc layout styles */
* html .column1, * html .column2 { width: 45%; }

/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)
   From http://www.positioniseverything.net/easyclearing.html 
#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}*/

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
	height: 1%;
	overflow: hidden;
}

/* viewtopic fix */
* html .post {
	height: 25%;
	overflow: hidden;
}

/* navbar fix */
* html .clearfix, * html .navbar, ul.linklist {
	height: 4%;
	overflow: hidden;
}

/* Simple fix so forum and topic lists always have a min-height set, even in IE6
	From http://www.dustindiaz.com/min-height-fast-hack */
dl.icon {
	min-height: 35px;
	height: auto !important;
	height: 35px;
}

* html li.row dl.icon dt {
	height: 35px;
	overflow: visible;
}

* html #search-box {
	width: 25%;
}

/* Correctly clear floating for details on profile view */
*:first-child+html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html dl.details dd {
	margin-left: 30%;
	float: none;
}

/* Headerbar height fix for IE7 and below */
* html #site-description p {
	margin-bottom: 1.0em;
}

*:first-child+html #site-description p {
	margin-bottom: 1.0em;
}

/* #minitabs fix for IE */
.tabs-container {
	zoom: 1;
}

#minitabs {
	white-space: nowrap;
	*min-width: 50%;
}
/*  	
--------------------------------------------------------------
Colours and backgrounds for common.css
-------------------------------------------------------------- */

html, body {
	color: #333333;
	background-color: #F6F6F6;
}

h1 {
	color: #FFFFFF;
}

h2 {
	color: #3E3E3E;
}

h3 {
	color: #3E3E3E;
}

hr {
	border-color: #E4E4E4;
}

hr.dashed {
	border-top-color: #E4E4E4;
}

/* Search box
--------------------------------------------- */

.search-box {
	color: #FFFFFF;
}

.search-box #keywords {
	background-color: #FFF;
}

.search-box input {
	border: 0;
}
.search-box .search-box-inner .button2 {
    border: 0;
    cursor: pointer;
    float: right;
    height: 26px;
    padding: 0;
    text-indent: -9999px;
    width: 26px !important;	
	
    background-attachment: scroll;
    background-image: url("{T_THEME_PATH}/images/search-button-bg.png");
    background-position: left top;	
}
.search-box .search-box-inner .button2:hover {
    background-position: left bottom;	
}


/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background-color: #12A3EB;
	background-image: url("{T_THEME_PATH}/images/bg_header.gif");
	color: #FFFFFF;
}

.navbar {
	/*background-color: #cadceb;*/
}

.forabg {
	background-color: #43A6DF;
}

.forumbg {
	background-color: #43A6DF;
}

.panel {
	background-color: #FFFFFF;
	border: solid 1px #E4E4E4;
	padding: 12px;
}

.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

.bg1	{ background-color: #fff; overflow: hidden; }
.bg2	{ background-color: #fff; overflow: hidden; }
.bg3	{ background-color: #fff; overflow: hidden; }

.ucprowbg {
	background-color: #DCDEE2;
}

.fieldsbg {
	background-color: #E7E8EA;
}

span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left.png");
}

span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right.png");
}

span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left.png");
}

span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right.png");
}

/* Horizontal lists
----------------------------------------*/

ul.navlinks {
	border-bottom-color: #FFFFFF;
}

/* Table styles
----------------------------------------*/
table.table1 thead th {
	color: #FFFFFF;
}

table.table1 tbody tr {
	border-color: #E4E4E4;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #F2F2F2;
	color: #000;
}

table.table1 td {
	color: #43A6DF;
}

table.table1 tbody td {
	border-top-color: #E4E4E4;
}

table.table1 tbody th {
	border-bottom-color: #E4E4E4;
	color: #333333;
	background-color: #FFFFFF;
}

table.info tbody th {
	color: #000000;
}

#memberlist, .table-list {
	border-collapse: collapse;
}
#memberlist th, .table-list th {
	background-color: #2E3539;
	padding: 14px 0;
}
#memberlist th.name, .table-list th.name {
	padding-left: 6px;
}
/* Misc layout styles
---------------------------------------- */
dl.details dt {
	color: #000000;
	font-weight: bold;
}

dl.details dd {
}

.sep {
	color: #43A6DF;
}

/* Pagination
---------------------------------------- */

.pagination span strong {
	color: #FFFFFF;
	background-color: #2E3539;
	border-color: #2E3539;
}

.pagination span a, .pagination span a:link, .pagination span a:visited {
	background-color: #FFFFFF;
	border-color: #E4E4E4;
}

.pagination span a:hover {
	border-color: #43A6DF;
	background-color: #43A6DF;
	color: #FFF;
}

.pagination span a:active {
	color: #5C758C;
	background-color: #ECEDEE;
	border-color: #B4BAC0;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	background-image: url("{T_THEME_PATH}/images/icon_pages.png");
}

.row .pagination span a, li.pagination span a {
	background-color: #FFFFFF;
}

.row .pagination span a:hover, li.pagination span a:hover {
	background-color: #368AD2;
}

/* Miscellaneous styles
---------------------------------------- */

.copyright {
	color: #555555;
}

.error {
	color: #BC2A4D;
}

.reported {
	
}
.post.reported, .row.reported {
	border: solid 3px #FF5500;
}

li.reported:hover {
	
}
.sticky, .announce {
	/* you can add a background for stickies and announcements*/
}

div.rules {
	background-color: #2E3539;
	color: #FFFFFF;
	background-attachment: scroll;
	background-image: url("{T_THEME_PATH}/images/notice-exclamation.png");
	background-repeat: no-repeat;
	background-position: 12px 12px;
	padding-left: 60px;
}
div.rules a {
	color: #43A6DF;
	font-weight: bold;
	text-decoration: underline;
}
div.rules a:hover {
	text-decoration: none;
}

p.rules {
	background-image: none;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for links.css
-------------------------------------------------------------- */

a:link	{ color: #43A6DF; }
a:visited	{ color: #43A6DF; }
a:hover	{ color: #43A6DF; }
a:active	{ color: #43A6DF; }

/* Links on gradient backgrounds */
.search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #43A6DF;
}

.search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #43A6DF;
}

.search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #43A6DF;
}

.search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #43A6DF;
}

/* Links for forum/topic lists */
a.forumtitle {
	color: #2E3539;
}

/* a.forumtitle:visited { color: #105289; } */

a.forumtitle:hover {
	color: #2E3539;
}

a.forumtitle:active {
	color: #2E3539;
}

a.topictitle {
	color: #43A6DF;
}

/* a.topictitle:visited { color: #368AD2; } */

a.topictitle:hover {
	color: #43A6DF;
}

a.topictitle:active {
	color: #43A6DF;
}

/* Post body links */
.postlink {
	color: #43A6DF;
	border-bottom-color: #43A6DF;
}

.postlink:visited {
	color: #43A6DF;
	border-bottom-color: #43A6DF;
}

.postlink:active {
	color: #43A6DF;
}

.postlink:hover {
	background-color: transparent;
	color: #43A6DF;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	color: #43A6DF;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	color: #43A6DF;
}

.postprofile a:active {
	color: #43A6DF;
}

/* Profile searchresults */	
.search .postprofile a {
	color: #43A6DF;
}

.search .postprofile a:hover {
	color: #43A6DF;
}

/* Back to top of page */
a.top {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

a.top2 {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

/* Arrow links  */
a.up		{ background-image: url("{T_THEME_PATH}/images/arrow_up.png") }
a.down		{ background-image: url("{T_THEME_PATH}/images/arrow_down.png") }
a.left		{ background-image: url("{T_THEME_PATH}/images/arrow_left.png") }
a.right		{ background-image: url("{T_THEME_PATH}/images/arrow_right.png") }

a.up:hover {
	background-color: transparent;
	color: #43A6DF;
}

a.left:hover {
	text-decoration: underline;
	color: #43A6DF;
}

a.right:hover {
	text-decoration: underline;
	color: #43A6DF;
}


/*  	
--------------------------------------------------------------
Colours and backgrounds for content.css
-------------------------------------------------------------- */

ul.forums {
	background-color: #ffffff;
}
.ucp-main ul.topiclist {
	background-color: #2E3539;
	color: #fff;
	clear: both;
}
ul.topiclist li {
	
}

ul.topiclist dd {
	border-left-color: #FFFFFF;
}

.rtl ul.topiclist dd {
	border-right-color: #fff;
	border-left-color: transparent;
}

ul.topiclist li.row dt a.subforum.read {
	background-image: url("{IMG_SUBFORUM_READ_SRC}");
}

ul.topiclist li.row dt a.subforum.unread {
	background-image: url("{IMG_SUBFORUM_UNREAD_SRC}");
}

li.row {
	
}

li.row strong {
	color: #000000;
}

li.row:hover {
	background-color: #F2F2F2;
}

li.row:hover dd {
	
}

.rtl li.row:hover dd {
	
}

li.header dt, li.header dd {
	color: #FFFFFF;
}

/* Forum list column styles */
ul.topiclist dd.searchextra {
	color: #333333;
}
.mcp-main .header {
	background-color: #2E3539;
    color: #FFFFFF;
}
/* Post body styles
----------------------------------------*/
.postbody {
	color: #333333;
}

/* Content container styles
----------------------------------------*/
.content {
	color: #333333;
}

.content h2, .panel h2 {
	border-bottom-color:  #E4E4E4;
}

dl.faq dt {
	color: #333333;
}

.posthilit {
	background-color: #F3BFCC;
	color: #BC2A4D;
}

/* Post signature */
.signature {
	border-top-color: #E4E4E4;
}

/* Post noticies */
.notice {
	border-top-color:  #E4E4E4;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background-color: #F7F7F7;
	background-image: url("{T_THEME_PATH}/images/quote.gif");
	border-color:#E4E4E4;
}

.rtl blockquote {
	background-image: url("{T_THEME_PATH}/images/quote_rtl.gif");
}

blockquote blockquote {
	/* Nested quotes */
	background-color:#EFEED9;
}

blockquote blockquote blockquote {
	/* Nested quotes */
	background-color: #EBEADD;
}

/* Code block */
dl.codebox {
	background-color: #FFFFFF;
	border-color: #C9D2D8;
}

dl.codebox dt {
	border-bottom-color:  #CCCCCC;
}

dl.codebox code {
	color: #2E8B57;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #FF8000; }
.syntaxdefault	{ color: #0000BB; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #007700; }
.syntaxstring	{ color: #DD0000; }

/* Attachments
----------------------------------------*/
.attachbox {
	background-color: #FFFFFF;
	border-color:  #C9D2D8;
}

.pm-message .attachbox {
	background-color: #F2F3F3;
}

.attachbox dd {
	border-top-color: #E4E4E4;
}

.attachbox p {
	color: #666666;
}

.attachbox p.stats {
	color: #666666;
}

.attach-image img {
	border-color: #999999;
}

/* Inline image thumbnails */

dl.file dd {
	color: #666666;
}

dl.thumbnail img {
	border-color: #666666;
	background-color: #FFFFFF;
}

dl.thumbnail dd {
	color: #666666;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border-color: #368AD2;
}

/* Post poll styles
----------------------------------------*/

fieldset.polls dl {
	border-top-color: #DCDEE2;
	color: #666666;
}

fieldset.polls dl.voted {
	color: #000000;
}

fieldset.polls dd div {
	color: #FFFFFF;
}

.rtl .pollbar1, .rtl .pollbar2, .rtl .pollbar3, .rtl .pollbar4, .rtl .pollbar5 {
	border-right-color: transparent;
}

.pollbar1 {
	background-color: #AA2346;
	border-bottom-color: #74162C;
	border-right-color: #74162C;
}

.rtl .pollbar1 {
	border-left-color: #74162C;
}

.pollbar2 {
	background-color: #BE1E4A;
	border-bottom-color: #8C1C38;
	border-right-color: #8C1C38;
}

.rtl .pollbar2 {
	border-left-color: #8C1C38;
}

.pollbar3 {
	background-color: #D11A4E;
	border-bottom-color: #AA2346;
	border-right-color: #AA2346;
}

.rtl .pollbar3 {
	border-left-color: #AA2346;
}

.pollbar4 {
	background-color: #E41653;
	border-bottom-color: #BE1E4A;
	border-right-color: #BE1E4A;
}

.rtl .pollbar4 {
	border-left-color: #BE1E4A;
}

.pollbar5 {
	background-color: #F81157;
	border-bottom-color: #D11A4E;
	border-right-color: #D11A4E;
}

.rtl .pollbar5 {
	border-left-color: #D11A4E;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	color: #666666;
	border-left-color: #FFFFFF;
}

.rtl .postprofile {
	border-right-color: #FFFFFF;
	border-left-color: transparent;
}

.pm .postprofile {
	border-left-color: #DDDDDD;
}

.rtl .pm .postprofile {
	border-right-color: #DDDDDD;
	border-left-color: transparent;
}

.postprofile strong {
	color: #000000;
}

.online {
	background-image: url("{IMG_ICON_USER_ONLINE_SRC}");
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for buttons.css
-------------------------------------------------------------- */

/* Big button images */
.reply-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_REPLY_SRC}"); }
.post-icon span		{ background-image: url("{IMG_BUTTON_TOPIC_NEW_SRC}"); }
.locked-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_LOCKED_SRC}"); }
.pmreply-icon span	{ background-image: url("{IMG_BUTTON_PM_REPLY_SRC}") ;}
.newpm-icon span 	{ background-image: url("{IMG_BUTTON_PM_NEW_SRC}") ;}
.forwardpm-icon span	{ background-image: url("{IMG_BUTTON_PM_FORWARD_SRC}") ;}

a.print {
	background-image: url("{T_THEME_PATH}/images/icon_print.png");
}

a.sendemail {
	background-image: url("{T_THEME_PATH}/images/icon_sendemail.png");
}

a.fontsize {
	background-image: url("{T_THEME_PATH}/images/icon_fontsize.gif");
}

/* Icon images
---------------------------------------- */
.sitehome						{ background-image: url("{T_THEME_PATH}/images/icon_home.png"); }
.icon-faq						{ background-image: url("{T_THEME_PATH}/images/icon_faq.gif"); }
.icon-members					{ background-image: url("{T_THEME_PATH}/images/icon_members.gif"); }
.icon-home						{ background-image: url("{T_THEME_PATH}/images/icon_home.png"); }
.icon-ucp						{ background-image: url("{T_THEME_PATH}/images/icon_ucp.gif"); }
.icon-register					{ background-image: url("{T_THEME_PATH}/images/icon_register.gif"); }
.icon-logout					{ background-image: url("{T_THEME_PATH}/images/icon_logout.gif"); }
.icon-bookmark					{ background-image: url("{T_THEME_PATH}/images/icon_bookmark.png"); }
.icon-bump						{ background-image: url("{T_THEME_PATH}/images/icon_bump.gif"); }
.icon-subscribe					{ background-image: url("{T_THEME_PATH}/images/icon_subscribe.png"); }
.icon-unsubscribe				{ background-image: url("{T_THEME_PATH}/images/icon_unsubscribe.png"); }
.icon-pages						{ background-image: url("{T_THEME_PATH}/images/icon_pages.gif"); }
.icon-search					{ background-image: url("{T_THEME_PATH}/images/icon_search.gif"); }

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background-image: url("{IMG_ICON_CONTACT_EMAIL_SRC}"); }
.aim-icon, .aim-icon a			{ background-image: url("{IMG_ICON_CONTACT_AIM_SRC}"); }
.yahoo-icon, .yahoo-icon a		{ background-image: url("{IMG_ICON_CONTACT_YAHOO_SRC}"); }
.web-icon, .web-icon a			{ background-image: url("{IMG_ICON_CONTACT_WWW_SRC}"); }
.msnm-icon, .msnm-icon a			{ background-image: url("{IMG_ICON_CONTACT_MSNM_SRC}"); }
.icq-icon, .icq-icon a			{ background-image: url("{IMG_ICON_CONTACT_ICQ_SRC}"); }
.jabber-icon, .jabber-icon a		{ background-image: url("{IMG_ICON_CONTACT_JABBER_SRC}"); }
.pm-icon, .pm-icon a				{ background-image: url("{IMG_ICON_CONTACT_PM_SRC}"); }
.quote-icon, .quote-icon a		{ background-image: url("{IMG_ICON_POST_QUOTE_SRC}"); }

/* Moderator icons */
.report-icon, .report-icon a		{ background-image: url("{IMG_ICON_POST_REPORT_SRC}"); }
.edit-icon, .edit-icon a			{ background-image: url("{IMG_ICON_POST_EDIT_SRC}"); }
.delete-icon, .delete-icon a		{ background-image: url("{IMG_ICON_POST_DELETE_SRC}"); }
.info-icon, .info-icon a			{ background-image: url("{IMG_ICON_POST_INFO_SRC}"); }
.warn-icon, .warn-icon a			{ background-image: url("{IMG_ICON_USER_WARN_SRC}"); } /* Need updated warn icon */

/*  	
--------------------------------------------------------------
Colours and backgrounds for cp.css
-------------------------------------------------------------- */

/* Main CP box
----------------------------------------*/

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #E4E4E4;
}

#cp-main .panel li.row {
	border-bottom-color: #E4E4E4;
}

ul.cplist {
	border-top-color: #E4E4E4;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	
}

#cp-main table.table1 thead th {
	border-bottom-color: #E4E4E4;
}

#cp-main .pm-message {
	border-color: #E4E4E4;
	background-color: #FFFFFF;
}

/* CP tabbed menu
----------------------------------------*/
#tabs a {
	
}

#tabs a span {
	
}

#tabs a:hover span {
	
}

#tabs .activetab a {
	
}

#tabs .activetab a span {
	color: #333333;
}

#tabs .activetab a:hover span {
	color: #000000;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs li {
	background-color: #E1EBF2;
}

#minitabs li.activetab {
	background-color: #F9F9F9;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #333333;
}

/* UCP navigation menu
----------------------------------------*/

/* Link styles for the sub-section links */
#navigation a {
	color: #fff;
	background-color: #43A6DF;
}

.rtl #navigation a {
}

#navigation a:hover {
	background-image: none;
	background-color: #2E3539;
	color: #fff;
}

#navigation #active-subsection a {
	color: #fff;
	background-color: #2E3539;
	background-image: none;
}

#navigation #active-subsection a:hover {
	color: #fff;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	
}

#cp-main .panel {
	
}

#cp-main .pm {
	background-color: #FFFFFF;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left2.gif");
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right2.gif");
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left2.gif");
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right2.gif");
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left.gif");
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right.gif");
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left.gif");
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right.gif");
}

/* Friends list */
.cp-mini {
	background-color: #eef5f9;
}

dl.mini dt {
	color: #425067;
}

/* PM Styles
----------------------------------------*/
/* PM Message history */
.current {
	color: #000000 !important;
}

/* PM marking colours */
.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #BC2A4D;
	border-right-color: #BC2A4D;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	border-color: #FF6600;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	border-color: #A9B8C2;
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	border-color: #5D8FBD;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	border-color: #000000;
}

/* Avatar gallery */
#gallery label {
	background-color: #FFFFFF;
	border-color: #CCC;
}

#gallery label:hover {
	background-color: #EEE;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for forms.css
-------------------------------------------------------------- */

/* General form styles
----------------------------------------*/
select {
	border-color: #DCDCDC;
	background-color: #FFFFFF;
	color: #000;
}

label {
	
}

option.disabled-option {
	color: graytext;
}

/* Definition list layout for forms
---------------------------------------- */
dd label {
	color: #333;
}

/* Hover effects */
fieldset dl:hover dt label {
	color: #000000;
}

fieldset.fields2 dl:hover dt label {
	color: inherit;
}

/* Quick-login on index page */
fieldset.quick-login input.inputbox {
	background-color: #F2F3F3;
}

/* Posting page styles
----------------------------------------*/

#message-box textarea {
	color: #333333;
}

/* Input field styles
---------------------------------------- */
.inputbox {
	background-color: #F7F7F7; 
	border-color: #E4E4E4;
	color: #333333;
	padding: 6px;
}

.inputbox:hover {
	border-color: #43A6DF;
}

.inputbox:focus {
	border-color: #43A6DF;
	background-color: #F7F7F7;
}

/* Form button styles
---------------------------------------- */

a.button1, input.button1, input.button3, a.button2, input.button2 {
	color: #FFFFFF;
	background-color: #43A6DF;
}

a.button1, input.button1 {
	border-color: #666666;
}

input.button3 {
	background-image: none;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
	
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	color: #FFFFFF;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
	
	color: #FFFFFF;
}

input.search {
	
}

input.disabled {
	color: #666666;
}
/*  phpBB 3.0.11 Style Sheet
    --------------------------------------------------------------
	Style name: Metro Blue
	Copyright (C) 2013 PixelGoose Studio
    --------------------------------------------------------------
*/
@media only screen and (min-width: 1199px) {
    #subheader-menu li {
        background-image: none !important;
    }

}

@media only screen and (min-width: 960px) and (max-width: 1199px) {
    #wrap {
    	width: 940px;
    }
    #page-body-inner {
        width: 676px;
    }
    #subheader-menu li {
        background-image: none !important;
    }

}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    #wrap {
    	width: 750px;
    }
    #page-body-inner {
        width: 486px;
    }
    .forabg ul.topiclist dd.topics,
    .forabg ul.topiclist dd.posts,
    .forumbg ul.topiclist dd.views {
        display: none;
    }
	.search-box-inner {
	    width: 200px;
	}
	.search-box #keywords {
	    width: 150px;
	}
    .search-adv-link {
    	display: none;
    }
	ul.topiclist dt {               
	    width: 60%;
	}
    #header {
        height: 100px;
    }
    #header li {
        height: 100px;
        width: 100px;
        border-left-width: 10px;
    }
    #header li a {
        height: 100px;
        width: 100px;
        font-size: 1.077em;
    }
    .tabs li a {
        background-size: 100%;
    }
    #header #logo, #header li a span {
        bottom: 10px;
        left: 10px;
    }
    #header #logo img {
        height: auto;
        width: 83.33333333333333% !important;
    }
    #subheader-menu li {
        background-image: none !important;
    }
    .drafts dd.mark {
        display: none;
    }
    dd.mark {
        width: 5%;
    }
    ul.topiclist dt {
        overflow: hidden;
    }

}


@media only screen and (min-width: 480px) and (max-width: 767px) {
    html { 
        -webkit-text-size-adjust: 100%;
    }
    #wrap {
    	width: 95%;
    }
    #page-body-inner {
        width: 100% !important;
        float: none;
        margin-right: 0;
    }
    #sidebar {
        float: none;
        width: 100%;
        margin-bottom: 12px;
    }
    dd.topics, dd.posts,
    .forumbg ul.topiclist li.header dd.views,
    .forumbg ul.topiclist li.row dd.views {
    	display: none !important;
    }
    ul.topiclist dt {               
        width: 60%;
    }
    #above-headerbar {
        height: auto;
        overflow: hidden;
    }
    .user-links {
        float: none;
        overflow: hidden;
        margin-bottom: 12px;
        border-bottom: solid 1px #E4E4E4;
        text-align: center;
    }
    .user-links li {
        display: inline;
        vertical-align: top;
        zoom: 1; /* Fix for IE7 */
        *display: inline; /* Fix for IE7 */
        float: none;
    }
    .search-box {
        width: 100%;
    }
	.search-box-inner {
	    width: 100%;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        height: 32px;
	}
	.search-box #keywords {
	    width: 90%;
	}
    .search-adv-link {
    	display: none;
    }
    #page-body-inner {
    	width: 480px;
    }

    #header {
        height: 120px;
    }

    /* Subheader menu links */

    #subheader-menu li#submenu-mark-read {
        background-position: right center;
    }
    #subheader-menu li#submenu-unanswered {
        background-position: 0 center;
    }
    #subheader-menu li#submenu-unread {
        background-position: -28px center;
    }
    #subheader-menu li#submenu-search-new {
        background-position: -56px center;
    }
    #subheader-menu li#submenu-active-topics {
        background-position: -84px center;
    }
    #subheader-menu li a {
        display: block;
        width: 28px;
        height: 28px;
        text-indent: -9999px;
    }

    /* Tab menu */
    .tabs-outer {
        overflow: hidden;
    }
    .toggleMenuButton {
        display: block;
        width: 36px;
        height: 36px;

        position: absolute;
        right: 12px;
        bottom: 12px;
        border-radius: 2px;
        border: solid 1px #FFF;
    }
    .toggleMenuButton.active {
        background-color: #2E3539;
    }
    #header .tabs {
        float: none;
        position: absolute;
        top: 120px;
        z-index: 100;
        width: 100%;
        display: none;
    }
    #header li {
        height: auto;
        width: 100%;
        border: none;
    }
    #header li:hover, #header li:active {
    }
    #header li a {
        height: auto;
        width: 100%;
        font-size: 1.077em;
        border-top: solid 1px #E4E4E4;
        text-transform: none;
    }
    #header li a {
        background-image: none !important;
        padding: 12px 8px;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        background-color: #2E3539;
    }
    #header li a:hover, #header li a:active {
        text-decoration: none;
        background-color: #43A6DF;
    }
    #header li a span {
        position: static;
    }
    #header #logo img {
        height: auto;
    }


    #subheader-menu {
        height: auto;
        overflow: hidden;
    }
    #container1, #container2, #container3,
    #col1, #col2 {
        float: none;
        position: inherit;
        margin: 0;
    }
    #col1, #col2 {
        padding: 24px 12px !important;
        overflow: hidden;
    }
    #col1 {
        border-bottom: solid 12px #F6F6F6;
    }
    #col2 {
        background-color: #43A6DF;
        width: auto;
    }
    .linklist {
        float: none;
        text-align: center;
    }
    ul.linklist li {
        float: none !important;
        display: inline;
    }
    #faqlinks .column1, #faqlinks .column2 {
        float: none;
        width: 100%;
    }
    #memberlist .posts, #memberlist .info {
        display: none;
    }
    #memberlist.table1 thead tr th.name,
    #memberlist th.name, .table-list th.name {
        padding: 14px 6px 14px 3px !important;
    }
    fieldset.jumpbox {
        text-align: right;
    }
    fieldset.quickmod {
        height: auto;
        margin-bottom: 12px;
        width: auto;
    }
    fieldset dt {
        width: auto;
    }
    fieldset dd {
        margin-left: 0;
    }
    dd label {
        white-space: normal;
    }
    .topic-actions .pagination {
        margin-bottom: 12px;
    }
    .postbody ul.profile-icons {
        overflow: hidden;
        float: none;
    }
    .postbody h3 {
        margin: 12px 0 !important;
    }
    .panel fieldset dt {
        float: none;
    }
    .panel fieldset.fields1 dd {
        margin-left: 0;
    }
    #message-box {
        width: 94%;
    }
    #message-box textarea {
        width: 94%;
    }
    .column1, .column2 {
        clear: none;
        float: none;
        width: 100%;
    }
    #smiley-box {
        float: none;
        width: 100%;
    }
    .editor-status {
        display: none;
    }
    a.button1, input.button1, input.button3, a.button2, input.button2 {
        margin-bottom: 6px;
    }
    #tabs {
        margin: 20px 0 -1px;
        min-width: inherit;
    }
    #tabs ul {
        margin: 0;
        padding: 0;
        text-align: center;
    }
    #tabs li {
        display: inline-block;
    }
    #tabs a span {
        padding: 6px 8px;
    }
    #cp-menu, #cp-main {
        float: none;
        width: 100%;
    }
    th.ip, td.ip, th.date, td.date {
        display: none;
    }
    td.username {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    .panel .panel {
        padding: 0;
        border: none;
    }
    #minitabs li {
        display: inline-block;
        float: none;
        padding: 0 2px 4px;
    }
    #ucp .topiclist .header dd.mark {
        display: none;
    }
    dd.mark {
        width: 5%;
    }
    .drafts dd.mark {
        display: none;
    }
    ul.topiclist dt {
        overflow: hidden;
    }
    fieldset.fields2 dd {
        margin-left: 0 !important;
    }
    #cp-main h2 {
        margin-left: 0 !important;
    }
    dt.leader {
        padding: 14px 6px !important;
    }
    .info.leader {
        display: none;
    }
    .login-window {
        display: none;
    }
    .login-link {
        display: inline;
    }
}


@media only screen and (max-width: 479px) {
    html { 
        -webkit-text-size-adjust: 100%;
    }
    #wrap {
        width: 95%;
    }
    #page-body-inner {
        width: 100% !important;
        float: none;
        margin-right: 0;
    }
    h2 {
        font-size: 1.538em;
    }
    #sidebar {
        float: none;
        width: 100%;
        margin-bottom: 12px;
    }
    .topiclist .header dt {
        padding: 14px 6px !important;
        width: 100%;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
    }
    .topiclist .header dt a {
        padding-left: 0;
    }
    li.header dd.topics,
    li.header dd.posts,
    li.header dd.lastpost,
    li.header dd.views,
    li.row dd.posts,
    li.row dd.lastpost,
    li.row dd.views {
        display: none;
    }
    ul.topiclist dt {               
        width: 65%;
    }
    .forumbg ul.topiclist li.row dt {
        width: 80%;
    }
    li.header dl.icon {
        min-height: 48px;
    }
    .row .pagination {
        float: none;
        width: auto;
        text-align: left;
        margin: 6px 0px;
    }
    dl.icon dt {
        background-position: 5px 20px;
    }
    #above-headerbar {
        height: auto;
        overflow: hidden;
    }
    .user-links {
        float: none;
        overflow: hidden;
        margin-bottom: 12px;
        border-bottom: solid 1px #E4E4E4;
        text-align: center;
    }
    .user-links li {
        display: inline;
        vertical-align: top;
        zoom: 1; /* Fix for IE7 */
        *display: inline; /* Fix for IE7 */
        float: none;
        white-space: nowrap;
    }
    .search-box {
        width: 100%;
    }
    .search-box-inner {
        width: 100%;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        height: 32px;
    }
    .search-box #keywords {
        width: 85%;
    }
    .search-adv-link {
        display: none;
    }
    #page-body-inner {
        width: 480px;
    }

    #header {
        height: 120px;
    }


    /* Subheader menu links */

    #subheader-menu li#submenu-mark-read {
        background-position: right center;
    }
    #subheader-menu li#submenu-unanswered {
        background-position: 0 center;
    }
    #subheader-menu li#submenu-unread {
        background-position: -28px center;
    }
    #subheader-menu li#submenu-search-new {
        background-position: -56px center;
    }
    #subheader-menu li#submenu-active-topics {
        background-position: -84px center;
    }
    #subheader-menu li a {
        display: block;
        width: 28px;
        height: 28px;
        text-indent: -9999px;
    }


    /* Tab menu */
    .tabs-outer {
        overflow: hidden;
    }
    .toggleMenuButton {
        display: block;
        width: 36px;
        height: 36px;

        position: absolute;
        right: 12px;
        bottom: 12px;
        border-radius: 2px;
        border: solid 1px #FFF;
    }
    .toggleMenuButton.active {
        background-color: #2E3539;
    }
    #header .tabs {
        float: none;
        position: absolute;
        top: 120px;
        z-index: 100;
        width: 100%;
        display: none;
    }
    #header li {
        height: auto;
        width: 100%;
        border: none;
    }
    #header li:hover, #header li:active {
    }
    #header li a {
        height: auto;
        width: 100%;
        font-size: 1.077em;
        border-top: solid 1px #E4E4E4;
        text-transform: none;
    }
    #header li a {
        background-image: none !important;
        padding: 12px 8px;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        background-color: #2E3539;
    }
    #header li a:hover, #header li a:active {
        text-decoration: none;
        background-color: #43A6DF;
    }
    #header li a span {
        position: static;
    }
    #header #logo img {
        height: auto;
    }


    #subheader-menu {
        height: auto;
        overflow: hidden;
    }
    #container1, #container2, #container3,
    #col1, #col2 {
        float: none;
        position: inherit;
        margin: 0;
    }
    #col1, #col2 {
        padding: 24px 12px !important;
        overflow: hidden;
    }
    #col1 {
        border-bottom: solid 12px #F6F6F6;
    }
    #col2 {
        background-color: #43A6DF;
        width: auto;
    }
    .linklist {
        float: none;
        text-align: center;
    }
    .linklist a {
        white-space: nowrap;
    }
    ul.linklist li {
        float: none !important;
        display: inline;
    }
    #faqlinks .column1, #faqlinks .column2 {
        float: none;
        width: 100%;
    }
    #memberlist .posts, #memberlist .info {
        display: none;
    }
    #memberlist.table1 thead tr th.name,
    #memberlist th.name, .table-list th.name {
        padding: 14px 6px 14px 3px !important;
    }
    fieldset.jumpbox {
        text-align: left;
    }
    .jumpbox label, .quickmod label {
        display: block;
    }
    fieldset.quickmod {
        height: auto;
        width: 100%;
        text-align: left;
        margin-bottom: 12px;
    }
    fieldset dt {
        width: auto;
    }
    fieldset dd {
        margin-left: 0;
    }
    dd label {
        white-space: normal;
    }
    .rules {
        background-image: none !important;
        padding: 12px !important;
    }
    .display-options label {
        margin-bottom: 12px;
        display: block;
    }
    #jumpbox {
        clear: both;
        width: 100%;
        margin: 6px 0;
    }
    .topic-actions .buttons {
        margin-bottom: 12px;
    }
    .topic-actions .pagination {
        margin-bottom: 12px;
    }
    .postbody ul.profile-icons {
        overflow: hidden;
        float: none;
    }
    .postbody h3 {
        margin: 12px 0 !important;
    }
    p.author {
        margin: 0 0 0.6em;
    }
    .postprofile dd {
        display: none;
    }
    .section-viewtopic form#viewtopic {
        display: none;
    }
    fieldset dt {
        display: block;
        float: none;
        width: auto !important;
    }
    fieldset.fields2 dd {
        margin-left: 0;
    }
    .autowidth {
        width: 94% !important;
    }
    textarea#message {
        height: 150px;
    }
    fieldset.polls dt {
        width: 30% !important;
    }
    .panel fieldset dt {
        float: none;
    }
    .panel fieldset.fields1 dd {
        margin-left: 0;
    }
    #message-box {
        width: 94%;
    }
    #message-box textarea {
        width: 94%;
    }
    dl.details dt {
        clear: left;
        float: none;
        text-align: left;
        width: auto;
    }
    dl.details dd {
        float: left;
        margin-bottom: 12px;
        margin-left: 0;
        padding-left: 0;
        width: 100%;
    }

    .column1, .column2 {
        clear: none;
        float: none;
        width: 100%;
    }

    #smiley-box {
        float: none;
        width: 100%;
    }
    .editor-status {
        display: none;
    }
    a.button1, input.button1, input.button3, a.button2, input.button2 {
        margin-bottom: 6px;
    }
    #tabs {
        margin: 20px 0 -1px;
        min-width: inherit;
    }
    #tabs ul {
        margin: 0;
        padding: 0;
        text-align: center;
    }
    #tabs li {
        display: inline-block;
    }
    #tabs a span {
        padding: 6px 8px;
    }
    #cp-menu, #cp-main {
        float: none;
        width: 100%;
    }
    th.ip, td.ip, th.date, td.date {
        display: none;
    }
    td.username {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    .panel .panel {
        padding: 0;
        border: none;
    }
    #minitabs li {
        display: inline-block;
        float: none;
        padding: 0 2px 4px;
    }
    #ucp .topiclist .header dd.mark,
    #cp-main .topiclist .header dd.mark {
        display: none;
    }
    .drafts dd.mark {
        display: none;
    }
    .drafts dd.info,
    .drafts + .cplist > li > dl > dd.info,
    .pmlist dd.info {
        display: none;
    }
    ul.topiclist dt {
        overflow: hidden;
    }
    .attachments .time, .attachments + .cplist .time,
    .attachments .extra, .attachments + .cplist .extra {
        display: none;
    }
    .topiclist.attachments-list li.row dl dt {
        width: 85% !important;
    }
    #dateoptions {
        width: 100%;
    }
    dl.pmlist dt {
        width: 100% !important;
    }
    dl.pmlist dt textarea {
        width: 94%;
    }
    dl.pmlist dd {
        margin-left: 0 !important;
    }
    #search_memberlist .panel {
        padding: 0 !important;
        border: none;
    }
    .ucp-main dd select {
        width: 100%;
    }
    #cp-main h2 {
        margin-left: 0 !important;
    }
    dt.leader {
        padding: 14px 6px !important;
    }
    .info.leader {
        display: none;
    }
    .topiclist.leader li dl dt {
        width: 100%;
    }
    .topiclist.leader li dl dd.option {
        font-size: 1em;
        margin-right: 6px;
        padding: 4px 5px !important;
        text-align: left;
        width: auto;
    }
    .cp-mini.friends {
        margin: 0;
        padding: 12px 6px;
    }
    .display-actions {
        white-space: normal !important;
        text-align: center;
    }
    .display-actions select {
        width: 100% !important;
        margin-bottom: 6px;
    }
    .mcp-main .header dd.moderation {
        display: none;
    }
    .captcha {
        width: 100%;
    }
    .login-window {
        display: none;
    }
    .login-link {
        display: inline;
    }
}";s:10:"theme_path";s:10:"metro_blue";s:10:"theme_name";s:10:"Metro Blue";s:11:"theme_mtime";s:10:"1370504183";s:11:"imageset_id";s:1:"3";s:13:"imageset_name";s:10:"Metro Blue";s:18:"imageset_copyright";s:27:"&copy; pixelgoose.com, 2012";s:13:"imageset_path";s:10:"metro_blue";s:13:"template_path";s:10:"metro_blue";}}