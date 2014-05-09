<?php

/*
	Estilos específicos de la página de inicio
	Sólo se cargan cuando estamos en <front>
*/

/**
 * Preprocess variables
 */
global $language;
$lang = $language->language;
switch ($lang) {
  case 'es':
    $GLOBALS['fblang'] = 'es_LA';
    $GLOBALS['gplang'] = 'es-419';
    $GLOBALS['twlang'] = 'es';
  break;
  case 'en':
    $GLOBALS['fblang'] = 'en_US';
    $GLOBALS['gplang'] = '';
    $GLOBALS['twlang'] = '';
  break;
  case 'pt-br':
    $GLOBALS['fblang'] = 'pt_BR';
    $GLOBALS['gplang'] = 'pt-BR';
    $GLOBALS['twlang'] = 'pt';
  break;
} 

if(drupal_is_front_page()) {
	$options = array(
		'group'  => CSS_THEME,
		'weight' => 10,
		'preprocess' => FALSE
	);
  drupal_add_css(drupal_get_path('theme', 'qelluchaska') . "/styles/page-front.css", $options);
  
  $og_attributes = array('og:url', 'og:title', 'og:image', 'og:description', 'fb:app_id');
  
  foreach ($og_attributes as $k => $og_attribute) {
    $val = theme_get_setting($og_attribute);
    if (!empty($val)) {
      $element = array(
        '#tag' => 'meta',
        '#weight' => ($k + 10),
        '#attributes' => array(
          'property' => $og_attribute,
          'content' => $val,
        ),
      );
      drupal_add_html_head($element, "qelluchaska_meta_$og_attribute");
    }
  }
}
 