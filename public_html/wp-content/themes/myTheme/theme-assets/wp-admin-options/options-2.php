<?php

//Service Admin Options

$ds_prepare_theme_options6 = array (
	
	array(
		'type' => 'open'
	),
	array(
		'type' => 'close'
	)

);

function ds_write_theme_options6() {

   global $ds_prepare_theme_options6;
	
	?>
	
   <div class="wrap">
   
	<form method="post">
	
	<?php
	
	foreach ($ds_prepare_theme_options6 as $value) :
	
		switch ( $value['type'] ) :
	
			case 'open' :
				?><ul class="ds_admin">
            
	            <?php

				if ( $_REQUEST['reset'] ) echo '<li><div id="message" class="updated fade"><p><strong>Settings Reset.</strong></p></div></li>';
				if ( $_REQUEST['saved'] ) echo '<li><div id="message" class="updated fade"><p><strong>Settings Saved.</strong></p></div></li>';
				
				?>
            
				<?php
			break;
			
			
			
			case 'close':
				?></ul><?php
			break;
		
		endswitch;
		
	endforeach;
	
	?>
   
    <p class="submit" style="float: left;">
        <input name="save" type="submit" value="Save changes" class="button-primary" />
        <input type="hidden" name="action" value="save" />
    </p>
    
	</form>
   
	<form method="post">
    <p class="submit" style="float: left;">
        <input name="reset" type="submit" value="Reset"/>
        <input type="hidden" name="action" value="reset" />
    </p>
	</form>
    
	</div>
	
	<?php
	
}

function ds_put_theme_options_in_sidebar6() {

    global $ds_prepare_theme_options6;

		if ( $_GET['page'] == basename(__FILE__) ) :
		
			if ( 'save' == $_REQUEST['action'] ) :
			
				foreach ( $ds_prepare_theme_options6 as $value ) :
					update_option( $value['id'], stripslashes_deep($_REQUEST[ $value['id'] ]) );
				endforeach;
			
				foreach ( $ds_prepare_theme_options6 as $value ) :
					if ( isset( $_REQUEST[ $value['id'] ] ) ) :
						update_option( $value['id'], stripslashes_deep($_REQUEST[ $value['id'] ]) );
					else :
						delete_option( $value['id'] );
					endif;
				endforeach;
			
				header('Location: admin.php?page=' . basename(__FILE__) . '&saved=true');
				die;
			
			elseif ( 'reset' == $_REQUEST['action'] ) :
			
				foreach ( $ds_prepare_theme_options6 as $value ) :
					delete_option( $value['id'] );
				endforeach;
			

				header('Location: admin.php?page=' . basename(__FILE__) . '&reset=true');
				die;
			
			endif;
			
		endif;
	
	add_submenu_page( 'functions.php', 'Services  Editor', 'Services Editor', 8, basename(__FILE__), 'ds_write_theme_options6' );
	
}

add_action('admin_menu', 'ds_put_theme_options_in_sidebar6');

?>