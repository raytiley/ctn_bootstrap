<?php

/**
 * @file template.php
 */

function ctn_bootstrap_date_popup_process_alter(&$element, &$form_state, $context) {
  unset($element['date']['#description']);
  unset($element['time']['#description']);
}

function ctn_bootstrap_preprocess_page(&$variables) {
  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['columns'] = 3;
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['columns'] = 2;
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['columns'] = 2;
  }
  else {
    $variables['columns'] = 1;
  }

  // Primary nav
  $variables['primary_nav'] = FALSE;
  if ($variables['main_menu']) {
    // Build links
    $primary_nav = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    foreach ($primary_nav as $index => $item) {
      if(is_array($item)) {
        $primary_nav[$index]['#below'] = array();
      }
    }
    $variables['primary_nav'] = $primary_nav;
    // Provide default theme wrapper function
    $variables['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
  }

  // Secondary nav
  $variables['secondary_nav'] = FALSE;
  if ($variables['secondary_menu']) {
    // Build links
    $variables['secondary_nav'] = menu_tree(variable_get('menu_secondary_links_source', 'user-menu'));
    // Provide default theme wrapper function
    $variables['secondary_nav']['#theme_wrappers'] = array('menu_tree__secondary');
  }

}