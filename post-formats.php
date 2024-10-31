<?php
/*
Plugin Name: Post Formats
Plugin URI:  http://profiles.wordpress.org/silver530
Description: Enables Post Formats support.
Version:     1.0
Author:      silver530
Author URI:  http://www.pixelwars.org
License:     GPLv2 or later
Text Domain: post_formats
Domain Path: /langs/
*/


/*
Copyright (c) 2014, silver530.

This program is free software; you can redistribute it and/or 
modify it under the terms of the GNU General Public License 
as published by the Free Software Foundation; either version 2 
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details.

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


/* ============================================================================================================================================= */

	function post_formats_load_textdomain()
	{
		load_plugin_textdomain( 'post_formats', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' ); 
	}
	
	add_action( 'plugins_loaded', 'post_formats_load_textdomain' );

/* ============================================================================================================================================= */

	if ( ! current_theme_supports( 'post-formats' ) )
	{
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}

/* ============================================================================================================================================= */
	
?>