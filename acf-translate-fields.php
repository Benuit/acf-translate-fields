<?php
/*
Plugin Name: ACF translate fields
Plugin URI: -
Description: Helps you translate the ACF to several languages
Author: Luis Herranz
Author URI: -
Version: 1.0.0
*/

function acf_translate_fields( $field ){
	$field['label' ]        = __( $field['label' ], 	   'acf-translate-fields'  );
	$field['instructions' ] = __( $field['instructions' ], 'acf-translate-fields'  );
	return $field;
}
	
add_filter('acf/load_field', 'acf_translate_fields');

?>