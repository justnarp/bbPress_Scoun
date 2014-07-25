<?php bb_get_header(); ?>

<?php if ( $forums ) : ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a></li>
		</td>
	</tr>
</table>

<?php if ( $topics || $super_stickies ) : ?>
<?php if ( $super_stickies ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Sticky'); ?></li>
		</td>
	</tr>
</table>
<?php foreach ( $super_stickies as $topic ) : ?>
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
<?php endforeach; endif; // $super_stickies ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Latest Discussions'); ?> &nbsp;&nbsp;<?php new_topic(); ?></li>
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
<?php endforeach; endif; // $topics ?>
<?php endif; // $topics or $super_stickies ?>

<?php if ( bb_forums() ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Forums'); ?></li>
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

<table cellspacing="0" class="black">
	<tr>
		<td class="left text">
        	<?php printf(__('<a href="%1$s">Stats</a>'), bb_get_option('uri').'statistics.php') ?> &nbsp;&nbsp;
			<?php //if ( bb_is_user_logged_in() ) : ?>
	 			<?php foreach ( get_views() as $view => $title ) : ?>
                	<li><a href="<?php view_link(); ?>"><?php view_name(); ?></a></li>&nbsp;&nbsp;
				<?php endforeach; ?>
			<?php //endif; // bb_is_user_logged_in() ?>
			&nbsp;
		</td>
	</tr>
</table>
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

<?php else : // $forums ?>

<?php post_form(); endif; // $forums ?>

<?php bb_get_footer(); ?>
