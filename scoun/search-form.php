<form action="<?php bb_option('uri'); ?>search.php" method="get">
	
		<input type="text" size="38" maxlength="100" name="q" value="<?php echo attribute_escape( $q ); ?>" /><br /><br />
	
	<?php if( empty($q) ) : ?>
	<input type="submit" value="<?php echo attribute_escape( __('Search &raquo;') ); ?>" class="inputButton" />
	<?php else : ?>
	<input type="submit" value="<?php echo attribute_escape( __('Search again &raquo;') ); ?>" class="inputButton" />
	<?php endif; ?>
</form>
