<?php
	global $base_root;
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta property="fb:app_id" content="215893742140696" />
  <title><?php print $head_title; ?></title>
  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="fb:app_id" content="215893742140696" />
    <meta name="theme-color" content="#749536"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#749536"/>
  <!-- <meta property="fb:admins" content="{100010271913189}"/> -->
  <?php endif; ?>
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
  <!--Google Analytics-->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-9352105-5']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="fb-root"></div>	
  <script>
    window.fbAsyncInit = function() {
      FB.init({appId: '215893742140696', status: true, cookie: true,
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
