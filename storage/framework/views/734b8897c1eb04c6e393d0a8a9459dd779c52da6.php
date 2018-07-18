<?php

	function isMobile() {
	    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}

?>

<?php if(!isMobile()): ?>
  
<?php else: ?>
  
<?php endif; ?>

<?php echo $__env->make('index_d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('index_m', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>