	<div class="full_width line_space"></div>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        $class = $i == 1 ? 'services_box1' : '';
    ?>
        <div class="services_box column services_box<?php echo $i; ?> <?php echo $class  ; ?>">
			
            <div class="services_icon services_icon<?php echo $i; ?>">			<?php echo ds_get_ao('home_icon_desc' . $i); ?>			</div>
        
        </div>
    <?php }
    ?>

