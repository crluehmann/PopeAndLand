<?php
global $post;
$ds_prepare_page_fields = array (
	/*
	array(
		'name' => 'Testimonial name',
		'desc' => 'Name of testimonial',
		'id' => $ds_custom_field_key . 'testimonial_name',
		'type' => 'ec_single_colum_start',
		'default_value' => ''
	),
	
	array(
		'name' => 'website url',
		'desc' => 'website url',
		'id' => $ds_custom_field_key . 'website_url',
		'type' => 'ec_full_colum',
		'default_value' => ''
	),
	*/
	array(
		'name' => 'Background url',
		'desc' =>'Background url',
		'id' => $ds_custom_field_key . 'background_url',
		'type' => 'ec_full_upload_colum',
		'default_value' => ''
	),
	array(
		'name' => 'Custom css',
		'desc' => 'Custom css',
		'id' => $ds_custom_field_key . 'custom_css',
		'type' => 'ec_full_area_colum',
		'default_value' => ''
	)
	
	
);

function ds_write_page_fields() {
	global $post, $ds_prepare_page_fields;
	echo'
		
		<table cellspacing="0" id="inactive-plugins-table" style="width: 100%;">
		
			<tbody>
			
			';
	
			foreach ( $ds_prepare_page_fields as $custom_field ) :
				
				switch ( $custom_field['type'] ) :
				
					case 'ec_single_colum_start':
						?>
                  
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                  
                  <tr>
                  
                     <td  >
		
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        <p><?php echo $custom_field['desc']; ?></p>
                        <p> <input style="width: 100%" id="<?php echo $custom_field['id'] . '_value'; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /></p>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>

                     </td>
						<?php
					break;
					case 'ec_single_colum_start_date':
						?>
                  
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                  
                  <tr>
                  
                     <td  >
		
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        <p><?php echo $custom_field['desc']; ?></p>
                        <div style="position:relative;"><p> <input readonly="true" id="datepicker" class="date_input" style="width: 100%" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /></p></div>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>

                     </td>
						<?php
					break;
					case 'ec_full_colum':
						?>
                  
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                  
					
                  
                     <td  colspan="2">
		
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        <p><?php echo $custom_field['desc']; ?></p>
                        <p> <input style="width: 100%" id="<?php echo $custom_field['id'] . '_value'; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /></p>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>

                     </td>
					  </tr>
						<?php
					break;
					case 'ec_full_area_colum':
						?>
                  
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                  
					
                  
                     <td  colspan="2">
		
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        <p><?php echo $custom_field['desc']; ?></p>
                        <p> <textarea style="width:100%;" tabindex="6" name="<?php echo $custom_field['id'] . '_value'; ?>" cols="40" rows="3"><?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?></textarea></p>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>

                     </td>
					  </tr>
						<?php
					break;
					case 'ec_full_upload_colum':
						?>
                  
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                  
					
                  
                     <td  colspan="2">
		
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        <p><?php echo 'Using the <a href="media-upload.php?post_id='.$post->ID.'&type=image&TB_iframe=1&width=640&height=522" target="" class="thickbox">media library</a>, upload an image and paste the file URL here.'; ?></p>
                        <p> <input style="width: 100%" id="<?php echo $custom_field['id'] . '_value'; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /></p>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>

                     </td>
					  </tr>
						<?php
					break;
					
										
					
                    case 'ec_single_colum':
						?>
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                    <td>
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        
                        <p><?php echo $custom_field['desc']; ?></p>
                        
                        <p><input style="width: 100%" id="<?php echo $custom_field['id'] . '_value'; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /> </p>
         
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>
						
                     </td>
						<?php
					break;
					
					 case 'ec_single_colum_end':
						?>
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
                    <td>
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
                        
                        <p><?php echo $custom_field['desc']; ?></p>
                        
                        <p><input style="width: 100%" id="<?php echo $custom_field['id'] . '_value'; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="text" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /> </p>
         
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>
						
                     </td>
					 </tr>
					 	<?php
					break;
					case 'ec_hidden':
						?>
	               <?php $temp = get_post_meta($post->ID, $custom_field['id'] . '_value', true); ?>
					<tr style="display:none;">
                     <td colspan="4" >
                        <p><strong><?php echo $custom_field['name']; ?></strong></p>
						 <p><?php echo $custom_field['desc']; ?></p>
                        
                        <p> <input id= "<?php echo $custom_field['id']; ?>" name="<?php echo $custom_field['id'] . '_value'; ?>" type="hidden" value="<?php if ( $temp != "") { echo $temp; } else { echo $custom_field['default_value']; } ?>" /></p>
                        <input name="<?php echo $custom_field['id'] . '_noncename'; ?>" id="<?php echo $custom_field['id'] . '_noncename'; ?>" type="hidden" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ) ?>"/>
                     </td>
                    </tr>
						<?php
					break;
									
				endswitch;
			
			endforeach;
	
	echo'
	
			</tbody>
			
		</table>';
}

function ds_init_page_fields() {
	
	if ( function_exists('add_meta_box') ) :
		
		add_meta_box( 'new-meta-boxes', 'Theme Custom Fields', 'ds_write_page_fields', 'page', 'normal', 'high' );
		
	endif;
	
}

function ds_save_page_fields( $post_id ) {
	
		global $post, $ds_prepare_page_fields, $ds_custom_field_key;
	
		foreach ( $ds_prepare_page_fields as $custom_field ) :

			// verify this came from the our screen and with proper authorization,
			// because save_post can be triggered at other times
			
			if ( !wp_verify_nonce( $_POST[$custom_field['id'] . '_noncename'], plugin_basename(__FILE__) ) ) :
			 return $post_id;
			endif;
			
			// verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
			// to do anything
			
			if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
			
			// Check permissions
			if ( 'page' == $_POST['post_type'] ) :
			
				if ( !current_user_can( 'edit_page', $post_id ) ) :
				
					return $post_id;
					
			 	elseif ( !current_user_can( 'edit_post', $post_id ) ) :
				
					return $post_id;
					
				endif;
					
			endif;
			
			// OK, we're authenticated: we need to find and save the data
			
			if ( $custom_field['id'] == $ds_custom_field_key . 'price' ) :
			
				$data = ds_strip_comma($_POST[$custom_field['id'] . '_value']);
				
			else :
			
				$data = $_POST[$custom_field['id'] . '_value'];
			
			endif;
	
			if ( get_post_meta($post_id, $custom_field['id'] . '_value' ) == '') :
			
				add_post_meta($post_id, $custom_field['id'] . '_value', $data, true);
				
			elseif ( $data != get_post_meta($post_id,  $custom_field['id'] . '_value', true) ) :
				
				update_post_meta($post_id, $custom_field['id'] . '_value', $data);
				
			endif;
			
			if ($data == "") :
			
				delete_post_meta($post_id, $custom_field['id'] . '_value', get_post_meta($post_id, $custom_field['id'] . '_value', true));
				
			endif;
			
	
		endforeach;

}

add_action('admin_menu', 'ds_init_page_fields');
add_action('save_post', 'ds_save_page_fields');

?>