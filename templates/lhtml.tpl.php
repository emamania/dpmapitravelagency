<?php
	global $base_root;
?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head profile="<?php print $grddl_profile; ?>">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php if ($default_mobile_metatags): ?>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<?php endif; ?>
<meta http-equiv="cleartype" content="on">
<?php print $styles; ?>
<?php print $scripts; ?>
<?php if ($add_respond_js): ?>
  <!--[if lt IE 9]>
  <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
  <![endif]-->
<?php elseif ($add_html5_shim): ?>
  <!--[if lt IE 9]>
  <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
  <![endif]-->
<?php endif; ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
  window.___gcfg = {lang: '<?php print $GLOBALS['gplang']; ?>'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
      FB.init({appId: '<?php print theme_get_setting('fb:app_id'); ?>', status: true, cookie: true,
               xfbml: true});
    };
    (function() {
      var e = document.createElement('script'); e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/<?php print $GLOBALS['fblang']; ?>/all.js';
      document.getElementById('fb-root').appendChild(e);
    }());
  </script> 
<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?>
</body>
</html>
