<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 /**
  * Overrided theme_kaltura_player from contrib/kaltura/plugins/field_kaltura/field_kaltura.theme.inc
  * 
  * Removes fixed protocol (http://) to allow for https:// calls to not be mixed.
  * 
  */
 function mb_html5_kaltura_player($vars) {
  if (variable_get('kaltura_add_html5', 1) == 1 && !empty($vars['embed']['js'])) {
    drupal_add_js($vars['embed']['js'], 'external');
  }
  $out = '<div class="kaltura">';
  $out .= '<div class="kaltura-embed">' . $vars['embed']['html'] . '</div>';
  $out .= '</div>';
  $out = str_replace('="http://','="//', $out);
  return $out;
 }
