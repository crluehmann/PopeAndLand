
    <?php
    for ($i = 1; $i <= 3; $i++) {
        $class = $i == 1 ? 'services_box1' : '';
    ?>
        <div class="services_box column services_box<?php echo $i; ?> <?php echo $class  ; ?>">
			
            <div class="services_icon services_icon<?php echo $i; ?>">
        
        </div>
    <?php }
    ?>
