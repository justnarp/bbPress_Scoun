<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Register'); ?></li>
		</td>
	</tr>
</table>
<?php if ( !bb_is_user_logged_in() ) : ?>
<form method="post" action="<?php bb_option('uri'); ?>register.php">
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Registration'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e("Your password will be emailed to the address you provide."); ?>
            <?php if ( $user_safe === false ) : ?>
            <br /><br /><strong><?php _e('Your username was not valid, please try another.'); ?></strong>
            <?php endif; ?>
		</td>
	</tr>
</table>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Profile Information'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			





<table width="100%">
<tr class="required">
<th scope="row"><?php _e('Username<sup>*</sup>:'); ?></th>
<td><input name="user_login" type="text" id="user_login" size="30" maxlength="30" value="<?php if (1 != $user_login) echo $user_login; ?>" /></td>
</tr>



<?php if ( is_array($profile_info_keys) ) : foreach ( $profile_info_keys as $key => $label ) : ?>
<tr<?php if ( $label[0] ) { echo ' class="required"'; $label[1] .= '<sup>*</sup>'; } ?>>
  <th scope="row"><?php echo $label[1]; ?>:</th>
  <td><input name="<?php echo $key; ?>" type="text" id="<?php echo $key; ?>" size="30" maxlength="140" value="<?php echo $$key; ?>" /><?php
if ( $$key === false ) :
	if ( $key == 'user_email' )
		_e('<br />There was a problem with your email; please check it.');
	else
		_e('<br />The above field is required.');
endif;
?></td>
</tr>
<?php endforeach; endif; ?>
</table>
<br />
<sup>*</sup><?php _e(' These items are required.') ?>

<?php do_action('extra_profile_info', $user); ?>

<br /><br />
<input type="submit" name="Submit" value="<?php echo attribute_escape( __('Register &raquo;') ); ?>" />
</form>
		</td>
	</tr>
</table>

<?php else : ?>
<table class="content minheight" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e('You&#8217;re already logged in, why do you need to register?'); ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php bb_get_footer(); ?>
