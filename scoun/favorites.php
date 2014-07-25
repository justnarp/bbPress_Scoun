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
			<li><?php _e('Favorites'); ?></li>
		</td>
	</tr>
</table>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
        <?php _e('Your Favorites allow you to create a custom <abbr title="Really Simple Syndication">RSS</abbr> feed which pulls recent replies to the topics you specify.
To add topics to your list of favorites, just click the "Add to Favorites" link found on that topic&#8217;s page.'); ?>
		<?php if ( $user_id == bb_get_current_user_info( 'id' ) ) : ?>
			<?php printf(__('<br /><br />Subscribe to your favorites&#8217; <a href="%s"><abbr title="Really Simple Syndication">RSS</abbr> feed</a>.'), attribute_escape( get_favorites_rss_link( bb_get_current_user_info( 'id' ) ) )) ?>
		<?php endif; ?>
		<?php if ( $topics ) : ?>
        <?php else: if ( $user_id == bb_get_current_user_info( 'id' ) ) : ?>
		<br /><br /><?php _e('You currently have no favorites.'); ?>
		<?php else : ?>
		<br /><br /><?php echo get_user_name( $user_id ); ?> <?php _e('currently has no favorites.'); ?>
		<?php endif; endif; ?>
		</td>
	</tr>
</table>

<?php if ( $topics ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Current Favorites'); ?><?php if ( $topics ) echo ' (' . $favorites_total . ')'; ?></li>
		</td>
	</tr>
</table>

<?php foreach ( $topics as $topic ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title">[<?php user_favorites_link('', array('mid'=>'x'), $user_id); ?>] <a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
			<?php _e('Last post by'); ?> <?php topic_last_poster(); ?>
		</td>
		<td class="info">
			<?php topic_posts(); ?> <?php _e('post(s)'); ?><br />
			<?php topic_time(); ?> <?php _e('ago'); ?>
		</td>
	</tr>
</table>
<?php endforeach; ?>

<?php endif; ?>

<?php bb_get_footer(); ?>
