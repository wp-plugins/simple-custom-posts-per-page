<?php

/*
Plugin Name: Simple Custom Posts per Page
Plugin URI: http://www.adostudio.it/blog/simple-custom-posts-per-page-397/
Description: This plugin allows to configure the number of posts displayed for every custom post registered.
Version: 1.0
Author: Andrea Dell'Orco
Author URI: http://www.adostudio.it
License: GPL2
 * 
Copyright 2012 Adostudio di Andrea Dell'Orco (email : info@adostudio.it)

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

global $ado_cspp_disable;

//lang init
function ado_scpp_lang() {
 load_plugin_textdomain('ado-scpp','wp-content/plugins/ado-scpp');
}

//config works only in admin
if(is_admin()){

		
	add_action('init', 'ado_scpp_lang');

	add_action('admin_init', 'ado_scpp_init' );	
	

}

//core plugin setting
function ado_scpp_init(){
	
		
	
	
	add_settings_section( "ado_cspp_section", __("Custom Posts per Page",'ado-scpp'), 'ado_cspp_build_section', 'reading' );
	
	//var_dump($postType['post']->labels->name);
	$postType=get_post_types(array("public"=>"true","_builtin"=>false),'objects');
	if($postType)
	foreach ($postType as $pK => $pT) {
		register_setting( 'reading', 'ado_scpp_field-'.$pK,'intval');
		
		add_settings_field( 'ado_sccp_id-'.$pK, __("The",'ado-scpp').' <strong>'.$pT->labels->name.'</strong> '.__("show at most",'ado-scpp'), 'ado_cspp_input', 'reading','ado_cspp_section',array( 'label_for' => 'ado_scpp_field-id-'.$pK,"item"=>$pK,"name"=>$pT->labels->name) );
		
	}
	
	
}
//section string
function ado_cspp_build_section(){
	echo "<p>".__("Here you can set the number of custom posts displayed in every page.",'ado-scpp');
	echo "<br />".__("If in your template you need to disable the standard number of custom posts for a type set by plugin, you can use the following code before your custom query",'ado-scpp');
	echo ': <em>$GLOBALS[\'ado_cspp_disable\']="YOUR_TYPE"</em>';
	echo '</p>';
}

//form setting
function ado_cspp_input($args){
	settings_fields('reading');
	$val=get_option('ado_scpp_field-'.$args['item']);
	if($val<1||!$val)$val=get_option('posts_per_page');
	echo '<input name="ado_scpp_field-'.$args['item'].'" type="text" id="'.$args['label_for'].'" value="'.$val.'" class="small-text"> '.__("items",'ado-scpp');
}


//front end 
function cspp_custom_posts_per_page($query) {
	
		if(!$type=$query->query_vars['post_type']) return false;
		//if you want disable scpp in a particular position in your template
		if($type==$GLOBALS['ado_cspp_disable']) return false;
		if($n=get_option('ado_scpp_field-'.$type)) $query -> query_vars['posts_per_page'] = $n;
		else return false;
	}

if (!is_admin()) {
		add_filter('pre_get_posts', 'cspp_custom_posts_per_page');
}


?>