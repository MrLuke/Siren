<?php 

/*
Plugin Name: Siren 
Plugin URI: lukereid.me
Description: Wait until you get an error and find out. 
Version: 1.0
Author: Luke Reid
Author URI: lukereid.me
License: GPLv2 or later
*/

set_error_handler('siren');

function siren() {
	echo '<audio src="' . plugins_url( 'siren.m4a', __FILE__ ) . '" autoplay></audio>';
	return true;
}
