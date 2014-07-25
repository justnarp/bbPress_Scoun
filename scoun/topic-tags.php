
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Tags') ?></li>
		</td>
	</tr>
</table>

<?php if ( $public_tags ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php foreach ( $public_tags as $tag ) : ?>
				<li id="tag-<?php echo $tag->tag_id; ?>_<?php echo $tag->user_id; ?>"><a href="<?php bb_tag_link(); ?>" rel="tag"><?php tag_name(); ?></a> <?php tag_remove_link(); ?></li>
			<?php endforeach; ?>
            <br /><?php tag_form(); ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php if ( !$tags ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php printf(__('No <a href="%s">tags</a> yet.'), get_tag_page_link() ); ?>
            <br /><?php tag_form(); ?>
		</td>
	</tr>
</table>
<?php endif; ?>


