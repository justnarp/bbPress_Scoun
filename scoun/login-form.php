
<form class="login" method="post" action="<?php bb_option('uri'); ?>bb-login.php">
<table cellspacing="0" class="black no_border">
	<tr>
		<td class="left text">
			<li><?php printf(__('<a href="%1$s">Search</a>'), bb_get_option('uri').'search.php') ?></li>
            <li><?php printf(__('<a href="%1$s">Register</a>'), bb_get_option('uri').'register.php') ?></li>
			<li><?php printf(__('<a href="%1$s">Log in</a>'), bb_get_option('uri').'/bb-login.php') ?></li>
		</td>
	</tr>
</table>
</form>
