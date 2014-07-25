<?php bb_get_header(); ?>
<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> <?php bb_forum_bread_crumb(); ?></li>
		</td>
	</tr>
</table>

<?php if ( $updated ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Profile') ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e('Profile updated'); ?>. <a href="<?php profile_tab_link( $user_id, 'edit' ); ?>"><?php _e('Edit again &raquo;'); ?></a><br />
		</td>
	</tr>
</table>
<?php elseif ( $user_id == bb_get_current_user_info( 'id' ) ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Profile') ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php printf(__('This is how your profile appears to a fellow logged in member, you may <a href="%1$s">edit this information</a>. You can also <a href="%2$s">manage your favorites</a> and subscribe to your favorites&#8217; <a href="%3$s"><abbr title="Really Simple Syndication">RSS</abbr> feed</a>'), attribute_escape( get_profile_tab_link( $user_id, 'edit' ) ), attribute_escape( get_favorites_link() ), attribute_escape( get_favorites_rss_link() )); ?><br />
		</td>
	</tr>
</table>
<?php endif; ?>

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
			<?php bb_profile_data(); ?>
		</td>
	</tr>
</table>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Recent Replies'); ?></li>
		</td>
	</tr>
</table>
<?php if ( $posts ) : ?>
<?php foreach ($posts as $bb_post) : $topic = get_topic( $bb_post->topic_id ) ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title"><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
			<?php if ( $user->ID == bb_get_current_user_info( 'id' ) ) printf(__('You last replied %s ago'), bb_get_post_time()); else printf(__('User last replied %s ago'), bb_get_post_time()); ?>
		</td>
		<td class="info">
			<?php
		if ( bb_get_post_time( 'timestamp' ) < get_topic_time( 'timestamp' ) )
			printf(__('Most recent reply<br /> %s ago'), get_topic_time());
		else
			_e('No replies since');
		?>
		</td>
	</tr>
</table>
<?php endforeach; ?>

<?php else : if ( $page ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e('No more replies.') ?>
        </td>
	</tr>
</table>

<?php else : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php _e('No replies yet.') ?>
        </td>
	</tr>
</table>
<?php endif; endif; ?>

<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Threads Started') ?></li>
		</td>
	</tr>
</table>
<?php if ( $threads ) : ?>
<?php foreach ($threads as $topic) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title"><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
			<?php printf(__('Started %s ago'), get_topic_start_time()); ?>
		</td>
		<td class="info">
			<?php
		if ( bb_get_post_time( 'timestamp' ) < get_topic_time( 'timestamp' ) )
			printf(__('Most recent reply<br /> %s ago'), get_topic_time());
		else
			_e('No replies since');
		?>
		</td>
	</tr>
</table>
<?php endforeach; ?>

<?php else : if ( $page ) : ?>
<p><?php _e('No more topics posted.') ?></p>
<?php else : ?>
<p><?php _e('No topics posted yet.') ?></p>
<?php endif; endif;?>

<?php profile_pages(); ?>

<?php bb_get_footer(); ?>
