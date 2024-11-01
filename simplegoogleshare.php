<?php 
/*
Plugin Name: Simple Google Share
Plugin URI: http://ronnykibet.com/blog/simple-google-share-plugin-demo/
Description: Increase your web traffic with the new Google share button by including it at the bottom of each post for visitors to share content upon visit.
Author: Ronny Kibet.
Author URI: http://ronnykibet.com/blog/
Version: 1.0
*/
/*  Copyright 2o12  ronnykibet  ( ronsang90@gmail.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//include the button at the end of each post
function simple_google_share_btn($button){

	$button .= '<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';
	return $button;

}
add_action('the_content','simple_google_share_btn');

//plugin admin page
function simple_google_share_page(){
	ob_start();?>
		<div id="icon-options-general" class="icon32"></div>
		<div id="wrap">
			<h1>Simple Google Share</h1><br>
			<p>Hello blogger, you don't have to do any settings from here. Just check below you blog posts, and you should have a working Google share button.</p>
			<p>If you have any question or would like to suggest some additional features, Hit me on my facebook page. <a target="_blank" href="https://www.facebook.com/RonnyProg">Contact</a></p>
			<p>Do you like this plugin? Share it on Google. </p><br>
			<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>'
			
		</div>
<?php
	echo ob_get_clean();
}

//plugin settings tab
function simple_google_share_tab(){

	add_options_page('simple google share','Simple Google Share','manage_options','simplegoogleshare','simple_google_share_page');


}
add_action('admin_menu','simple_google_share_tab');

