<?php if ( $topic_title ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Edit Post'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
        <input name="topic" type="text" id="topic" size="50" maxlength="80" tabindex="1" value="<?php echo attribute_escape( get_topic_title() ); ?>" />
		</td>
	</tr>
</table>
<?php endif; ?>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Message') ?></li>
		</td>
	</tr>
</table>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<textarea name="post_content" cols="50" rows="8" id="post_content" tabindex="2"><?php echo apply_filters('edit_text', get_post_text() ); ?></textarea><br />
			<input type="submit" name="Submit" value="<?php echo attribute_escape( __('Edit Post &raquo;') ); ?>" tabindex="5" />
			<input type="hidden" name="post_id" value="<?php post_id(); ?>" />
			<input type="hidden" name="topic_id" value="<?php topic_id(); ?>" />
		</td>
		<td class="info_light">
			<?php _e('Allowed markup:'); ?><br /><code><?php allowed_markup(); ?></code>.<br /><br /><?php _e('Put code in between <code>`backticks`</code>.'); ?>
		</td>
	</tr>
</table>
