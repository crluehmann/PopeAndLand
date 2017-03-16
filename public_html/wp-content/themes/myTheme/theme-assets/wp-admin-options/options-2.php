<?php

//Service Admin Options

$ds_prepare_theme_options6 = array (
	
	array(
		'type' => 'open'
	),	array(		'name' => 'Three Services on Home page Options',		'type' => 'options_title'	),		array(		'name' => 'Service Box 1',		'desc' => 'Please type your text',		'id' => $ds_theme_key . 'home_icon_desc1',		'type' => 'type_home_icon_desc1',		'default_value' => ''	),		array(		'name' => 'Service Box 2',		'desc' => 'Please type your text',		'id' => $ds_theme_key . 'home_icon_desc2',		'type' => 'type_home_icon_desc1',		'default_value' => ''	),		array(		'name' => 'Service Box 3',		'desc' => 'Please type your text',		'id' => $ds_theme_key . 'home_icon_desc3',		'type' => 'type_home_icon_desc1',		'default_value' => ''	),	
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
						case 'options_title':				?>				<li>				<div class="icon32" id="icon-options-general"><br/></div>				<h2><?php echo $value['name']; ?></h2>            </li>				<?php			break;			case 'type_home_icon_title1':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;				case 'type_home_icon_title2':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;				case 'type_home_icon_title3':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;			case 'type_home_icon_link1':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;			case 'type_home_icon_link2':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;			case 'type_home_icon_link3':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?>" /></p>	            </li>				<?php			break;			case 'type_home_icon_desc1':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><textarea name="<?php echo $value['id']; ?>" cols="55" rows="5"><?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?></textarea></p>	            </li>				<?php			break;			case 'type_home_icon_desc2':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><textarea name="<?php echo $value['id']; ?>" cols="55" rows="5"><?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?></textarea></p>	            </li>				<?php			break;			case 'type_home_icon_desc3':				?>	            <?php if ( get_option($value['id']) == '' ) : update_option($value['id'], $value['default_value']); endif; ?>				<li>                    <h3><?php echo $value['name']; ?></h3>                    <p><?php echo $value['desc']; ?></p>                    <p><textarea name="<?php echo $value['id']; ?>" cols="55" rows="5"><?php echo htmlspecialchars(get_option( $value['id'], $value['default_value']  )); ?></textarea></p>	            </li>				<?php			break;			
			
						
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