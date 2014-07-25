<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a>  &raquo; <?php _e('Edit Profile'); ?></li>
		</td>
	</tr>
</table>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php echo get_user_name( $user->ID ); ?></li>
		</td>
	</tr>
</table>
<form method="post" action="<?php profile_tab_link($user->ID, 'edit');  ?>">
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php bb_profile_data_form(); ?>
            <?php if ( bb_current_user_can( 'change_user_password', $user->ID ) ) : ?>
            <br />
            <?php _e('To change your password, enter a new password twice below:'); ?>
<table class="userinfo">
<tr>
  <th scope="row"><?php _e('New password:'); ?></th>
  <td><input name="pass1" type="password" id="pass1" size="15" maxlength="100" /></td>
</tr>
<tr>
	<th>&nbsp;</th>
  <td><input name="pass2" type="password" id="pass2" size="15" maxlength="100" /></td>
</tr>
</table>
<?php endif; ?>
		<br /><input type="submit" name="Submit" value="<?php echo attribute_escape( __('Update Profile &raquo;') ); ?>" />
        </form>
        <form method="post" action="<?php profile_tab_link($user->ID, 'edit');  ?>">
<?php bb_nonce_field( 'edit-profile_' . $user->ID ); ?>
<?php user_delete_button(); ?>
</form>
		</td>
	</tr>
</table>

<?php if ( bb_current_user_can( 'edit_users' ) ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Administration'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php bb_profile_admin_form(); ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php bb_get_footer(); ?>
