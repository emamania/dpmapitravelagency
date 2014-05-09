<?php 
	$description = $fields['description']->content;
	$timestamp = strtotime($fields['timestamp']->content);
	$timestamp = format_date($timestamp, 'custom', 'd M Y');	
	$description = str_replace('[fecha]', $timestamp, $description);
?>

<div class="testimonio">
  <div class="testimonio-description"><?php print $description; ?></div>
</div>
