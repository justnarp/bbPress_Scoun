
<table class="content" cellspacing="0" id="post-<?php post_id(); ?>">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
        	<div class="ml_avatar"><?php post_author_avatar(); ?></div>
			<?php post_text(); ?><div class="shadedlink"><?php post_edit_link(); ?><?php post_delete_link(); ?><?php post_ip_link(); ?></div>
		</td>
		<td class="info">
			<a href="<?php post_anchor_link(); ?>">#<?php post_id(); ?></a><br />
			<?php post_author_link(); ?><br />
			<?php post_author_title(); ?><br />
			<?php printf( __('Posted %s ago'), bb_get_post_time() ); ?>
		</td>
	</tr>
</table>