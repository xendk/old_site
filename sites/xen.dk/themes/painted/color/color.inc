<?php // $Id: color.inc,v 1.1.4.2.2.2 2009/03/18 23:19:54 couzinhub Exp $

$info = array(

  // Pre-defined color schemes
  'schemes' => array(
  	'#86a7b0,#337F91,#e0dbc2,#e0dbc2,#555555' => t('Aquarelle (Default)'),
		'#c1ba9a,#D63E03,#e0dbc2,#e0dbc2,#555555' => t('Abarre'),
		'#8798a1,#226c96,#e0dbc2,#e0dbc2,#555555' => t('Dark Blue'),
		'#62676a,#2e3957,#e0dbc2,#e0dbc2,#494949' => t('Ash'),
		'#c9b273,#6c420e,#e0dbc2,#e0dbc2,#6e6e6e' => t('Caramel'),
		'#88add3,#336699,#e0dbc2,#e0dbc2,#222222' => t('Bluemarine'),
		'#d3b650,#c27700,#e0dbc2,#e0dbc2,#555555' => t('Orange Juice'),
		'#6bad1a,#0c7a00,#e0dbc2,#e0dbc2,#555555' => t('Mars Attack'),
		'#bb8195,#9c2157,#e0dbc2,#e0dbc2,#555555' => t('Gelato'),
		'#e684a6,#c6246b,#e0dbc2,#e0dbc2,#555555' => t('Loves Pink'),
		'#a698b9,#9764be,#e0dbc2,#e0dbc2,#555555' => t('Purple'),
		'#517750,#1c5819,#e0dbc2,#e0dbc2,#555555' => t('Dark Forest'),
		'#dcdbcb,#816d46,#e0dbc2,#e0dbc2,#555555' => t('New Flat'),
		'#b0a786,#957e32,#e0dbc2,#e0dbc2,#555555' => t('Old Ashes'),
		'#c9534a,#8f2a00,#e0dbc2,#e0dbc2,#333333' => t('Red is dead'),
		'#bdc18f,#5a8217,#e0dbc2,#e0dbc2,#555555' => t('Green Tea'),
  ),

  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(
    'images/layout/bg.jpg'								    => array(1150, 0, 300, 300),
    'images/layout/border.gif'								=> array(1084, 0, 65, 65),
    'images/layout/header.jpg'						    => array(0, 0, 1083, 197),
    'images/layout/sidebar-bg.jpg'				    => array(0, 198, 1111, 99),
    'images/layout/side-title-left.gif'		    => array(1084, 66, 6, 9),
    'images/layout/side-title.gif'				    => array(1090, 66, 6, 9),
  ),

	'copy' => array(
	  'images/layout/even.gif',
	  'images/layout/content-bg.gif',
	  'images/layout/node.gif',
	  'images/layout/textarea.gif',
	  'images/interface/fieldset.png',
	  'images/interface/legend.gif',
	  'logo.png',
  ),

  // Color areas to fill (x, y, width, height)
  'fill' => array(
    'base' => array(0, 0, 1450, 300),
  ),
	
	// CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/style.css',
    'css/layout.css',
  ),
	
  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files
  'preview_image' => 'color/preview.png',
  'preview_css' => 'color/preview.css',

  // Base file for image generation
  'base_image' => 'color/base.png',
);
