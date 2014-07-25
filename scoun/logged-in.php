
<table cellspacing="0" class="black no_border">
	<tr>
		<td class="left text">
 			<li><?php printf(__('<a href="%1$s">Search</a>'), bb_get_option('uri').'search.php') ?></li>
            <li><a href="<?php favorites_link(); ?>"><?php _e('Favorites'); ?></a></li>
			<li><?php bb_profile_link('Profile'); ?></li>
			<li><?php bb_admin_link();?></li>
			<li><?php bb_logout_link( 'Log out [ ' . bb_get_current_user_info( 'name' ) . ' ]' ); ?></li>
		</td>
	</tr>
</table>
