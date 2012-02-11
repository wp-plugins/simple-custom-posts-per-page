<?php 
//old wp
if(!defined('WP_UNINSTALL_PLUGIN')){
	exit();
}

//delete config
 $GLOBALS['wpdb']->query('DELETE FROM  wp_options WHERE option_name LIKE "ado_scpp_field%"');

?>