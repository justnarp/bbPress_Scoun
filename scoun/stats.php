<?php bb_get_header(); ?>
<table cellspacing="0" class="black">
	<tr>
		<td class="left big_text">
			<li><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a></li>
		</td>
	</tr>
</table>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Statistics'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<div class="title"><?php _e('Registered Users'); ?></div>
            <?php total_users(); ?><br /><br />
            <div class="title"><?php _e('Posts'); ?></div>
            <?php total_posts(); ?>
            
		</td>
	</tr>
</table>

<?php if ($popular) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Most Popular Topics'); ?></li>
		</td>
	</tr>
</table>
<?php foreach ($popular as $topic) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php topic_link(); ?>'">
			<div class="title"><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></div>
		</td>
		<td class="info">
			<?php topic_posts(); ?> posts
		</td>
	</tr>
</table>
<?php endforeach; ?>
<?php endif; ?>

<?php bb_get_footer(); ?>
