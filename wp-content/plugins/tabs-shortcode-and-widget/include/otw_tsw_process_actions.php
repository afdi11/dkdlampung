<?php
/**
 * Process otw cm actions
 *
 */
if( isset( $_POST['otw_tsw_action'] ) ){
	
	require_once( ABSPATH . WPINC . '/pluggable.php' );
	
	switch( $_POST['otw_tsw_action'] ){
		
		case 'otw_tsw_settings_action':
				
				if( isset( $_POST['otw_cm_promotions'] ) && !empty( $_POST['otw_cm_promotions'] ) ){
					
					global $otw_tsw_factory_object, $otw_tsw_plugin_id;
					
					update_option( $otw_tsw_plugin_id.'_dnms', $_POST['otw_cm_promotions'] );
					
					if( is_object( $otw_tsw_factory_object ) ){
						$otw_tsw_factory_object->retrive_plungins_data( true );
					}
				}
				
				wp_redirect( admin_url( 'admin.php?page=otw-tsw-settings&message=1' ) );
			break;
	}
}
?>