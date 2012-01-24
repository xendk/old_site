<?php

function painted_preprocess_page(&$vars, $hook) {

  global $theme;

  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }

  // Don't display empty help from node_help().
  if ($vars['help'] == "<div class=\"help\"><p></p>\n</div>") {
    $vars['help'] = '';
  }

  // Classes for body element. Allows advanced theming based on context
  // (home page, node of certain type, etc.)
  $body_classes = array($vars['body_classes']);
  if (theme_get_setting('painted_header')) {
    $body_classes[] = ('header-on');
  }
  if (!$vars['is_front']) {
    // Add unique classes for each page and website section
    $path = drupal_get_path_alias($_GET['q']);
    list($section, ) = explode('/', $path, 2);
    $body_classes[] = painted_id_safe('page-'. $path);
    $body_classes[] = painted_id_safe('section-'. $section);
    if (arg(0) == 'node') {
      if (arg(1) == 'add') {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-add'; // Add 'section-node-add'
      }
      elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-'. arg(2); // Add 'section-node-edit' or 'section-node-delete'
      }
    }
  }
  if (!empty($vars['primary_links'])){
      $body_classes[] = 'withprimary';
    } else{
      $body_classes[] = 'noprimary';
    }
  $vars['body_classes'] = implode(' ', $body_classes); // Concatenate with spaces
}


function painted_preprocess_block(&$vars, $hook) {
  $block = $vars['block'];

  if (user_access('administer blocks')) {
    // Display 'edit block' for custom blocks
    if ($block->module == 'block') {
      $edit_links[] = l( t('edit block'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit'), drupal_get_destination(), NULL, FALSE, TRUE);
    }
    // Display 'configure' for other blocks
    else {
      $edit_links[] = l(t('configure'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('configure this block'), 'class' => 'block-config'), drupal_get_destination(), NULL, FALSE, TRUE);
    }

    // Display 'edit menu' for menu blocks
    if (($block->module == 'menu' || ($block->module == 'user' && $block->delta == 1)) && user_access('administer menu')) {
      $edit_links[] = l(t('edit menu'), 'admin/build/menu', array('title' => t('edit the menu that defines this block'), 'class' => 'block-edit-menu'), drupal_get_destination(), NULL, FALSE, TRUE);
    }
    $vars['edit_links_array'] = $edit_links;
    $vars['edit_links'] = '<div class="edit">'. implode(' ', $edit_links) .'</div>';
  }
}


function painted_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
    $string = 'id'. $string;
  }
  return $string;
}


//
//  Return a themed breadcrumb trail.
//	Alow you to customize the breadcrumb markup
//

function painted_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb"><div>'. implode(' › ', $breadcrumb) .'</div></div>';
  }
}


//
// Fieldset modification for new styles
//

function painted_fieldset($element) {
  if ($element['#collapsible']) {
    drupal_add_js('misc/collapse.js');

    if (!isset($element['#attributes']['class'])) {
      $element['#attributes']['class'] = '';
    }

    $element['#attributes']['class'] .= ' collapsible';
    if ($element['#collapsed']) {
     $element['#attributes']['class'] .= ' collapsed';
    }
  }
  if (module_exists('vertical_tabs') && arg(2) == 'edit' && arg(2) == 'add') {
    return '<fieldset' . drupal_attributes($element['#attributes']) .'>' . ($element['#title'] ? '<legend>'. $element['#title'] .'</legend>' : '') . ($element['#description'] ? '<div class="description">'. $element['#description'] .'</div>' : '') . $element['#children'] . $element['#value'] . "</fieldset>\n";
  } else {
    return '<div class="fieldsets-outer"><fieldset' . drupal_attributes($element['#attributes']) .'>' . ($element['#title'] ? '<legend>'. $element['#title'] .'</legend>' : '') . ($element['#description'] ? '<div class="description">'. $element['#description'] .'</div>' : '') . $element['#children'] . $element['#value'] . "</fieldset></div>\n";
  }
}

function page_property($values) {
  if (theme_get_setting('painted_width')) { 
    $output .= '<style type="text/css" media="screen">#page{' ;
    if (theme_get_setting('painted_width')) {
      $output .= "width:" . theme_get_setting('painted_width') . "px;" ;
    }
    $output .= '}</style>' ;
  }
  return $output;
}