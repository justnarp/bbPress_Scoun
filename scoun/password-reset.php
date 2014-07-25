<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Log in'); ?></li>
		</td>
	</tr>
</table>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Password Reset'); ?></li>
		</td>
	</tr>
</table>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
<?php if ( $reset ) : ?>
<?php _e('Your password has been reset and a new one has been mailed to you.'); ?>
<?php else : ?>
<?php _e('An email has been sent to the address we have on file for you. If you don&#8217;t get anything with a few minutes, or your email has changed, you may want to get in touch with the webmaster or forum administrator here.'); ?>
<?php endif; ?>
		</td>
	</tr>
</table>



<?php bb_get_footer(); ?>
