<?php
 global $base_root;
?>

<div id="main">
  <header id="header" role="banner">
    <hgroup id="header-inner" class="container_16">
      <h1 id="logo"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><span><?php print $site_name; ?></span></a></h1>
      <?php if ($site_slogan): ?>
        <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>
      <p id="header-mail"><?php print t('Book and ask 24/7!:'); ?> <strong>info@machupicchu.com.pe</strong></p>
    </hgroup>
  </header>
  <div class="clear"></div>
  <!-- //#header -->
  
  <div id="main-container">
    <div id="content" class="container_16">
      <div id="main-content" class="grid_16">
        <div id="main-content-inner">
          <div id="content-body" role="main">
            <?php if($messages || $page['help']) : ?>
            <div id="extras"> <?php print $messages; ?> <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
		<div id="welcome"><?php print render($page['welcome']); ?></div><div class="clear"></div>
            <section class="grid_9 alpha" id="homeleft"><?php print render($page['homeleft']); ?></section>
            <section class="grid_7 omega" id="homeright"><?php print render($page['homeright']); ?></section>
		<div class="clear"></div>
            <section class="grid_11 alpha" id="homebottom"><?php print render($page['homebottom']); ?></section>
            <section class="grid_5 omega" id="homemore"><?php print render($page['homemore']); ?></section>
		<div class="clear"></div>
            </div>
        </div>
      </div>
      <div class="clear"></div>
      <!-- //#content-body --> 
      <div id="sharebar"><?php print render($page['sharebar']); ?></div>
    </div>
    <!-- //#content --> 
  </div>
  <div class="clear"></div>
  <!-- //#main-container -->
  <?php print render($page['footer']); ?> 
  <?php print render($page['visa']); ?> 
</div>
