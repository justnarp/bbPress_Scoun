<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a><?php bb_forum_bread_crumb(); ?></li>
		</td>
	</tr>
</table>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php topic_title(); ?></li>
		</td>
	</tr>
</table>


<?php do_action('under_title', ''); ?>
<?php if ($posts) : ?>
<?php topic_pages(); ?>
<?php foreach ($posts as $bb_post) : $del_class = post_del_class(); ?>
<?php bb_post_template(); ?>
<?php endforeach; ?>

<?php topic_pages(); ?>
<?php endif; ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left text">
			<?php if ( bb_is_user_logged_in() ) : $class = 0 === is_user_favorite( bb_get_current_user_info( 'id' ) ) ? ' class="is-not-favorite"' : ''; ?>
			<?php user_favorites_link() ?>&nbsp;&nbsp;&nbsp;
			<?php endif; do_action('topicmeta'); ?>
			<a href="<?php topic_rss_link(); ?>"><?php _e('RSS feed for this topic') ?></a>
			&nbsp;
		</td>
	</tr>
</table>

<?php if ( topic_is_open( $bb_post->topic_id ) ) : ?>
<?php post_form(); ?>
<?php else : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Topic Closed') ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e('This topic has been closed to new replies.') ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php topic_tags(); ?>

<?php if ( bb_current_user_can( 'delete_topic', get_topic_id() ) || bb_current_user_can( 'close_topic', get_topic_id() ) || bb_current_user_can( 'stick_topic', get_topic_id() ) || bb_current_user_can( 'move_topic', get_topic_id() ) ) : ?>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Manage'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
				<?php topic_delete_link(); ?>&nbsp;&nbsp;&nbsp;
				<?php topic_close_link(); ?>&nbsp;&nbsp;&nbsp;
				<?php topic_sticky_link(); ?><br /><br />
				<?php topic_move_dropdown(); ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php bb_get_footer(); ?>