<?php bb_get_header(); ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?> &raquo; <a href="<?php tag_page_link(); ?>"><?php _e('Tags'); ?></a> &raquo; <?php tag_name(); ?></a></li>
		</td>
	</tr>
</table>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Latest Discussions'); ?> &nbsp;&nbsp;<?php new_topic(); ?></li>
		</td>
	</tr>
</table>

<?php // do_action('tag_above_table', ''); ?>

<?php if ( $topics ) : ?>
<?php foreach ( $topics as $topic ) : ?>
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
<?php endforeach; ?>

<table cellspacing="0" class="black">
	<tr>
		<td class="left text">
        	<a href="<?php tag_rss_link(); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr> link for this tag') ?></a>
			&nbsp;
		</td>
	</tr>
</table>

<?php tag_pages(); ?>

<?php endif; ?>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php manage_tags_forms(); ?>            
			<p class="tags"><?php tag_heat_map(); ?></p></td>
	</tr>
</table>

<?php // post_form(); ?>

<?php // do_action('tag_below_table', ''); ?>

<?php bb_get_footer(); ?>
