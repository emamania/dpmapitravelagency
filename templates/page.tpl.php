<?php
 global $base_root;
?>

<main id="main">
  <header id="header" role="banner">
    <div class="emagrid">
      <div class="hddata">
        <img src="/<?php echo drupal_get_path('theme', 'mapitravelagency');?>/images/tours-machu-picchu.jpg" alt="Destinos de Todo el Perú, Machupicchu Travel">
        <div class="logo">
          <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home">        
            <img src="/<?php echo drupal_get_path('theme', 'mapitravelagency');?>/images/logo-mapi-travel.png" alt="Logo de Machupicchu Travel">
          </a>
        </div>
      </div>
    </div>    
  </header>

  <div id="main-container">
    <div id="contento" class="emagrid">
      <div class="md-grid-11 emagrid">
        <aside class="md-cols-3">
          <div id="sidebar-inner" class="region region-sidebar"> <?php print render($page['sidebar']); ?> </div>        
        </aside>
        <div class="md-cols-8">
          <div id="content-header">
            <?php if ($title): ?>
              <?php print render($title_prefix); ?>
              <h1 class="title"><?php print $title; ?></h1>
              <?php print render($title_suffix); ?>
            <?php endif; ?>
          </div>
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
            <?php print render($page['content']); ?>
          </div> 
        
        </div>
      </div>
    </div>
  </div> 

</main>
<?php print render($page['footer']); ?>
  <style>
    @media only screen and (max-width: 680px){
      .olark-launch-button{
        bottom:125px !important;
      }
    }
  </style>
<?php print render($page['visa']); ?>