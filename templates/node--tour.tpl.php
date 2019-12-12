<?php
 global $base_root;
 $path = $base_root . $node_url;
?>
<article id="node-<?php print $node->nid; ?>" class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div id="node-inner"> <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
    <?php print render($title_prefix); ?>
    <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </header>
    <?php print render($title_suffix); ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
     <div class="content"<?php print $content_attributes; ?>>
      <section id="tour-bar">
        <div class="bar-visa">
          <h5><?php print t('Pay with'); ?></h5>
              <img src="/sites/all/themes/qellucart/images/logo-paypal.png" height="30" alt="<?php t('Pay with PayPal'); ?>" />
          <p><input type="text" placeholder="<?php print t('Advance'); ?>" id="the-amount" autofocus></p>
          <div class="tooltip">
          <span>
<p><strong>¿What is Paypal?</strong></p>

<ul style="text-align:left;">
<li>It is a method of easy, quick payment, and insurance. </li>
<li>You can make payment by credit card and debit cards.</li>
<li>Register in PayPal your financial data once. It wont be necessary to collect them in future purchases.</li>
<li>PayPal protects your information. We NOT share your financial data.</li>
</ul>

          </span>
          <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" width="130" style="margin-top:-10px; margin-left:0; display:block; padding-bottom:5px"> </div>
          <!--<h5><img src="http://media.perunoticias.net/images/tarjetas-paypal.jpg" width="80" style="margin-top:-10px; margin-left:24px; display:block; padding-bottom:5px"/></h5>-->
        </div>
      	<div class="bar-reserva">
        	<h5><?php print t('Book now!'); ?></h5>
            <a href="/chat/" class="button action live-chat"><?php print t('Chat now!'); ?></a>
            <a href="/skype/" class="button no-action live-skype"><?php print t('Call us!'); ?></a>
        </div>
        <div class="bar-social">
          <h5><?php print t('Share this tour:') ?></h5>
          <ul>
            <li class="social">
              <g:plus action="share" annotation="bubble" height="15" href="<?php print $path; ?>"></g:plus>
            </li>
            <li class="social">
              <fb:like href="<?php print $path; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
            </li>
            <li class="social"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $path; ?>" data-count="horizontal" data-via="MapiTravel4All" data-lang="<?php print $GLOBALS['twlang']; ?>">Tweet</a></li>
          </ul>
        </div>
        
        <?php if(isset($field_en['und']) || isset($field_br['und'])) : ?>
        <div class="bar-langs">
          <h5><?php print t('Also available in:'); ?></h5>
          <ul>
            <?php if(isset($field_en['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_en['und'][0]['value'];?>"><img class="lang-en" src="http://media.perunoticias.net/images/iconos/flag-lang-en.png" /> <?php print t('English'); ?></a></li>
            <?php endif; ?>
            <?php if(isset($field_br['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_br['und'][0]['value'];?>"><img class="lang-br" src="http://media.perunoticias.net/images/iconos/flag-lang-br.png" /> <?php print t('Portuguese'); ?></a></li>
            <?php endif; ?>
            <?php if(isset($field_es['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_es['und'][0]['value'];?>"><img class="lang-br" src="http://media.perunoticias.net/images/iconos/flag-lang-br.png" /> <?php print t('Spanish'); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
      </section>
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>
    <div class="meta"> <?php print render($content['links']); ?> <?php print render($content['comments']); ?> </div>
<div class="fb-comments" data-href="<?php print $path; ?>" data-num-posts="5" data-width="100%" data-order-by="reverse_time" data-mobile="true"></div>
  </div>
</article>
<!-- /.node --> 
