<?php bb_get_header(); ?>
<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> <?php bb_forum_bread_crumb(); ?></li>
		</td>
	</tr>
</table>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Tags'); ?></li>
		</td>
	</tr>
</table>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text"><?php _e('This is a collection of tags that are currently popular on the forums:'); ?><br /><br />
        <p class="tags"><?php tag_heat_map(); ?></p></td>
	</tr>
</table>

<?php bb_get_footer(); ?>
