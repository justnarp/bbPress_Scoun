<?php bb_get_header(); ?>
<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> <?php echo $profile_page_title; ?></li>
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
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php bb_profile_base_content(); ?>
		</td>
	</tr>
</table>

<?php bb_get_footer(); ?>
