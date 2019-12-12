<?php 
	$description = $fields['description']->content;
	$timestamp = strtotime($fields['timestamp']->content);
	$timestamp = format_date($timestamp, 'custom', 'd M Y');	
  $description = str_replace('[fecha]', $timestamp, $description);
  	//Elimina links EN, PT que generan errores 404
	$description= preg_replace("~\<ul\D+\</span>~",'',$description);
?>

<div class="testimonio">
  <div class="testimonio-description"><?php print $description; ?></div>
</div>
