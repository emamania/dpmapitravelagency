<?php 
	$title = $fields['title']->content;
	$description = $fields['description']->content;
	$timestamp = strtotime($fields['timestamp']->content);
	$timestamp = format_date($timestamp, 'custom', 'd \d\e F \d\e\l Y');
	$link = $fields['link']->content;
?>

<article class="noticia"> <?php print $title; ?>
  <p class="noticia-fecha"><?php print $timestamp; ?></p>
  <p class="noticia-description"><?php print $description; ?> <a href="<?php print $link; ?>"><?php print t('Read more...'); ?></a></p>
  <ul class="noticia-social">
    <li class="node-social">
      <g:plusone size="medium" href="<?php print $link; ?>"></g:plusone>
    </li>
    <li class="node-social">
      <fb:like href="<?php print $link; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
    </li>
    <li class="node-social"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $link; ?>" data-count="horizontal" data-via="MapiTravel4All" data-lang="<?php print $GLOBALS['twlang']; ?>" data-text="<?php print strip_tags($title); ?>">Tweet</a> </li>
  </ul>
</article>
<div class="clear"></div>
