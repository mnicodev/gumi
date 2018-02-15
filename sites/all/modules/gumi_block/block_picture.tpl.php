<a href="/user">
<div class="picture-player">

	<div class="fond-picture"></div>
	<?php if(isset($user->picture->uri)): ?><img src="<?php echo image_style_url('picture',$user->picture->uri); ?>" /><?php endif; ?>
	

</div>
<?php if(is_object($user) && isset(current($user->field_player_name)[0]["value"]) && current($user->field_player_name)[0]["value"]): ?><span class="player-name"><?php print current($user->field_player_name)[0]["value"]; ?></span><?php endif; ?>
</a>
