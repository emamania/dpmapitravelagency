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
      <div class="emagrid md-grid-12">
          <div class="md-cols-12">
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
          </div>
        </div>
        <section class="first">
          <div class="emagrid md-grid-12">
            <div class="md-cols-12">
              <div id="welcome"><?php print render($page['welcome']); ?></div>
            </div>
            <div class="md-cols-8">
              <section class="alpha" id="homeleft"><?php print render($page['homeleft']); ?></section>
            </div>
            <div class="md-cols-4">
                <section class="omega" id="homeright"><?php print render($page['homeright']); ?></section>
            </div>
          </div>
        </section>
        <section class="other">
          <div class="emagrid md-grid-12">
            <div class="md-cols-8">
              <section class="alpha" id="homebottom"><?php print render($page['homebottom']); ?></section>
            </div>
            <div class="md-cols-4">
              <section class="omega" id="homemore"><?php print render($page['homemore']); ?></section>            
            </div>
          </div>
        </section>
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
