<?php

$vid = $fields['link']->content;
$vid = str_replace('http://www.youtube.com/watch?v=', '', $vid);
$vid = str_replace('&amp;feature=youtube_gdata_player',  '', $vid);

?>
<div class="testimonio-video">
	<iframe width="100%" height="250" src="http://www.youtube.com/embed/<?php print $vid; ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
</div>
