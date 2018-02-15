
<div class="profil_gamer <?php if(isset($data->picture->uri)): ?>with-picture<?php endif; ?>">
	<?php if(isset($data->picture->uri)): ?>
	<div class="picture" style="background-image: url(<?php print image_style_url('medium',$data->picture->uri); ?>)">
		<div class="titre-picture"><?php //print t("profile picture");?></div>
		
		
	</div>
	<?php endif; ?>
	
	<div class="fiche">
		<div class="item">
			<label><?php print t("player's name"); ?></label>
			<span><?php if(isset(current($data->field_player_name)[0]["value"])) print current($data->field_player_name)[0]["value"];?></span>
		</div>
		<div class="item">
			<label><?php print t("email"); ?></label>
			<span><?php if(isset($data->mail)) print $data->mail;?></span>
		</div>
		<div class="item">
			<label><?php print t("member since"); ?></label>
			<span><?php if(isset($data->created)) print date("d/m/Y",$data->created);?></span>
		</div>
		<div class="item">
			<label><?php print t("language"); ?></label>
			<span><?php if(isset($data->language) && $data->language) print language_list()[$data->language]->name;?></span>
		</div>
		<div class="item">
			<label><?php print t("last connexion"); ?></label>
			<span><?php if(isset($data->access)) print date("d/m/Y",$data->access);?></span>
		</div>
	</div>
	<div class="submit"><a href="/user/<?php print $data->uid;?>/edit"><?php print t("edit profil")?></a></div>
</div>
	
<?php //print_r($data); ?>
