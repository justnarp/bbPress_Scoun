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
			<li><?php _e('Search'); ?></li>
		</td>
	</tr>
</table>

<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php search_form( $q ); ?>
			<?php if ( $q && !$recent && !$relevant ) : ?>
			<?php _e('<br />No results found.') ?>
			<?php endif; ?>
		</td>
	</tr>
</table>

<?php if ( $users ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Users'); ?></li>
		</td>
	</tr>
</table>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>
		<td class="text">
			<?php foreach ( $users as $user ) : ?>
				<a href="<?php user_profile_link($user->ID); ?>"><?php echo get_user_name( $user->ID ); ?></a><br />
			<?php endforeach; ?>
		</td>
	</tr>
</table>
<?php endif; ?>

<?php if ( $recent ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Recent Posts')?></li>
		</td>
	</tr>
</table>
<?php foreach ( $recent as $bb_post ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php post_link(); ?>'">
			<div class="title"><a href="<?php post_link(); ?>"><?php topic_title($bb_post->topic_id); ?></a></div>
			<?php echo bb_show_context($q, $bb_post->post_text); ?>
		</td>
		<td class="info">
			<?php bb_post_time( __('F j, Y, h:i A') ); ?>
		</td>
	</tr>
</table>
<?php endforeach; ?>
<?php endif; ?>

<?php if ( $relevant ) : ?>
<table cellspacing="0" class="white">
	<tr>
		<td class="left big_text">
			<li><?php _e('Relevant posts')?></li>
		</td>
	</tr>
</table>
<?php foreach ( $relevant as $bb_post ) : ?>
<table class="content" cellspacing="0">
	<tr>
		<td class="watcher">&nbsp;</td>        
		<td class="text hover" onmouseover="this.className='text yeshover'; this.style.cursor='pointer';" onmouseout="this.className='text nohover';" onclick="window.location.href='<?php post_link(); ?>'">
			<div class="title"><a href="<?php post_link(); ?>"><?php topic_title($bb_post->topic_id); ?></a></div>
			<?php echo bb_show_context($q, $bb_post->post_text); ?>
		</td>
		<td class="info">
			<?php bb_post_time( __('F j, Y, h:i A') ); ?>
		</td>
	</tr>
</table>
<?php endforeach; ?>
<?php endif; ?>

<?php bb_get_footer(); ?>
