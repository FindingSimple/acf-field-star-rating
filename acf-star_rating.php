<?php
/*
Plugin Name: Advanced Custom Fields: Star Rating
Plugin URI: {{git_url}}
Description: {{short_description}}
Version: 1.0.0
Author: {{full_name}}
Author URI: {{website}}
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_star_rating_plugin
{
	/*
	*  Construct
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function __construct()
	{
		// set text domain
		/*
		$domain = 'acf-star_rating';
		$mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
		load_textdomain( $domain, $mofile );
		*/
		
		add_action('acf/register_fields', array($this, 'register_fields'));	

	}
	
		
	/*
	*  register_fields
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function register_fields()
	{
		include_once('star_rating.php');
		include_once('star_rating_average.php');
	}
	
}

new acf_field_star_rating_plugin();
		
?>