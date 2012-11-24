<?php
/*
Plugin Name: TODO
Plugin URI: TODO
Description: TODO
Version: 1.0
Author: Name Nachname
Author URI: http://www.awsome-wordpress-plugin.com
Author Email: info@awsome-wordpress-plugin.com
Author google profile ID: 116520935691953756105
Author twitter: https://twitter.com/DerPixler
Company Name: The Awsome Wordpress Plugin Company
Company URI: http://www.rene-reimann.de
License:

  Copyright 2012 TODO (email@domain.com)

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


/** 
 * Init Plugin when is it Loaded
 * 
 * TODO: Replace PluginName with your new plugin name
 */
add_action( 'plugins_loaded', 'init_PluginName');

function init_PluginName(){
	require_once 'inc/index.class.php';
	new PluginName( plugin_basename(__FILE__) );
}


?>