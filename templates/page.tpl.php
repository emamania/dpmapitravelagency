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
      <aside id="sidebar" class="grid_5">
        <div id="sidebar-inner" class="region region-sidebar"> <?php print render($page['sidebar']); ?> </div>
      </aside>
      <div id="main-content" class="grid_11" role="main">
        <div id="main-content-inner">
          <div id="content-header">
            <?php if ($title): ?>
            <?php print render($title_prefix); ?>
            <h1 class="title"><?php print $title; ?></h1>
            <?php print render($title_suffix); ?>
            <?php endif; ?>
          </div>
          <!-- /#content-header -->
          
          <div id="content-body">
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
            <?php print render($page['content']); ?> </div>
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
