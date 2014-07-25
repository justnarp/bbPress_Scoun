<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> <?php bb_forum_bread_crumb(); ?></li>
		</td>
	</tr>
</table>

<?php if ( bb_forums( $forum_id ) ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Subforums'); ?></li>
		</td>
	</tr>
</table>
<?php while ( bb_forum() ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php forum_link(); ?>'">
			<div class="title"><?php bb_forum_pad( '<div class="nest">' ); ?><a href="<?php forum_link(); ?>"><?php forum_name(); ?></a><span style="font-weight: normal;"><?php forum_description("<br />"); ?></span><?php bb_forum_pad( '</div>' ); ?></div>
			<!--<?php bb_forum_pad( '<div class="nest">' ); ?><p><?php _e('Last Poster'); ?>: <?php topic_last_poster(); ?></p><?php bb_forum_pad( '</div>' ); ?>//-->
		</td>
		<td class="info">
			<?php forum_topics(); ?> <?php _e('discussion(s)'); ?>
		</td>
	</tr>
</table>
<?php endwhile; ?>
<?php endif; // bb_forums() ?>



<?php if ( $topics || $stickies ) : ?>
<?php if ( $stickies ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Sticky'); ?></li>
		</td>
	</tr>
</table>
<?php if ( $stickies ) : foreach ( $stickies as $topic ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title"><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
			<?php _e('Last post by'); ?> <?php topic_last_poster(); ?>
		</td>
		<td class="info">
			<?php topic_posts(); ?> <?php _e('post(s)'); ?><br />
			<?php topic_time(); ?> <?php _e('ago'); ?>
		</td>
	</tr>
</table>
<?php endforeach; endif; endif; // stickies ?>



<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Topics'); ?> &nbsp;&nbsp;<?php new_topic(); ?></li>
		</td>
	</tr>
</table>

<?php if ( $topics ) : foreach ( $topics as $topic ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title"><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
			<p><?php _e('Last post by'); ?> <?php topic_last_poster(); ?></p>
		</td>
		<td class="info">
			<?php topic_posts(); ?> <?php _e('post(s)'); ?><br />
			<?php topic_time(); ?> <?php _e('ago'); ?>
		</td>
	</tr>
</table>
<?php endforeach; endif; //topics ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left text">
			<a href="<?php forum_rss_link(); ?>"><?php _e('RSS feed for this forum'); ?></a>
			&nbsp;
		</td>
	</tr>
</table>

<div class="nav">
<?php forum_pages(); ?>
</div>
<?php endif; ?>


<?php post_form(); ?>

<?php bb_get_footer(); ?>
