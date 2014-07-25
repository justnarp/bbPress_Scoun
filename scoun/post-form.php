<?php if ( is_bb_tag() ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Pick a section'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php bb_new_topic_forum_dropdown(); ?>
        </td>
	</tr>
</table>
<?php endif; ?>

<?php if ( is_front() ) : ?>
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
			<li><?php _e('Pick a section'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php bb_new_topic_forum_dropdown(); ?>
        </td>
	</tr>
</table>
<?php endif; ?>

<?php if ( !is_topic() ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Topic title'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<input name="topic" type="text" id="topic" size="50" maxlength="80" tabindex="1" />
        </td>
	</tr>
</table>
<?php endif; do_action( 'post_form_pre_post' ); ?>





<label for="post_content">
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
			<textarea name="post_content" cols="50" rows="8" id="post_content" tabindex="3"></textarea><br />
			<?php if ( !is_topic() ) : ?>
				<span class="smalltext"><br /><?php printf(__('Enter a few words (called <a href="%s">tags</a>) separated by commas to help someone find your topic:'), get_tag_page_link()) ?></span><br />
				<input id="tags-input" name="tags" type="text" size="50" maxlength="100" value="<?php tag_name(); ?> " tabindex="4" /><br />
			<?php endif; ?>
            <input type="submit" id="postformsub" name="Submit" value="<?php echo attribute_escape( __('Send Post &raquo;') ); ?>" tabindex="5" />
		</td>
		<td class="info_light">
			<?php _e('Allowed markup:'); ?><br /><code><?php allowed_markup(); ?></code>.<br /><br /><?php _e('Put code in between <code>`backticks`</code>.'); ?>
		</td>
	</tr>
</table>
</label>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text"><?php _e('Hot Tags'); ?></td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text"><p class="tags"><?php tag_heat_map(); ?></p></td>
	</tr>
</table>
