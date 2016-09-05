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


function genix_preprocess_html(&$vars){
//  drupal_add_css(drupal_get_path('theme', 'genix') . '/css/hf.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
drupal_add_css(drupal_get_path('theme', 'genix') . '/css/bootstrap.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
drupal_add_css(drupal_get_path('theme', 'genix') . '/css/bootstrap.theme.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
drupal_add_css(drupal_get_path('theme', 'genix') . '/css/bootstrap.lightbox.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));


drupal_add_css(drupal_get_path('theme', 'genix') . '/css/test.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));

drupal_add_css(drupal_get_path('theme', 'genix') . '/css/layout.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
drupal_add_css(drupal_get_path('theme', 'genix') . '/css/red.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
drupal_add_css(drupal_get_path('theme', 'genix') . '/css/custom.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));



/*
   drupal_add_css(drupal_get_path('theme', 'genix') . '/bootstrap/css/bootstrap.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
   drupal_add_css(drupal_get_path('theme', 'genix') . '/css/layout.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
   drupal_add_css(drupal_get_path('theme', 'genix') . '/css/red.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
   drupal_add_css(drupal_get_path('theme', 'genix') . '/css/custom.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));*/

   drupal_add_css(drupal_get_path('theme', 'genix') . '/bootstrap/css/bootstrap-lightbox.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
   drupal_add_css(drupal_get_path('theme', 'genix') . '/js-plugin/animation-framework/animate.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
   drupal_add_css(drupal_get_path('theme', 'genix') . '/js-plugin/magnific-popup/magnific-popup.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));

   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/modernizr-2.6.1.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'header'));

   drupal_add_js(drupal_get_path('theme', 'genix') . '/bootstrap/js/bootstrap.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/respond/respond.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/easing/jquery.easing.1.3.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/magnific-popup/jquery.magnific-popup.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/flexslider/jquery.flexslider-min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/isotope/jquery.isotope.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/parallax/js/jquery.stellar.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/js-plugin/camera/camera.min.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));
   drupal_add_js(drupal_get_path('theme', 'genix') . '/js/custom.js', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'scope' => 'footer'));

   $search_box = drupal_render(drupal_get_form('search_form'));
   $vars['search_box'] = $search_box;
}

function genix_preprocess_zone(&$vars){
  $logo_url = theme_get_setting('logo_path', 'genix');
  $logo_url = empty($logo_url) ? theme_get_setting('logo', 'genix') : $logo_url;

  $vars['logo_url'] = $logo_url;
}

/**
 * Implmentation of hook_preprocess_node().
 */
function genix_preprocess_node(&$vars) {
  /* turn off number of reads */
  unset($vars['content']['links']['statistics']);

 /* if ($vars['type'] == 'site_page') {
		$i = 0;
    while(!empty($vars['field_files'][$i]['fid']) && $vars['field_files'][$i]['display']) {
      $file = $vars['field_files'][$i];
      $vars['content']['field_files']['#prefix'] = '<a id="file-'.$i.'"></a>';
			$i++;

    }
  } */

}

function genix_preprocess_field(&$vars) {
	//add anchors to each uploaded file
  if($vars['element']['#field_name'] == 'field_files') {
    //kpr($vars);
    $i = 0;
		while(!empty($vars['items'][$i]['#file'])) {
      $vars['items'][$i]['#prefix'] = '<a id="file-'.$i.'"></a>';
			$i++;
    }
		return;// exit quickly
  }

}


/**
  * Unset the Alpha/Omega themes from the appearance page
  * We don't want anyone enabling them directly
  *
  * Needs moved to module since theme isn't used for admin, but keeping here for reference
  */
function open_omega_system_themes_page_alter(&$theme_groups) {
	$hidden = array(
	  'alpha', 'omega',
	);
	foreach ($theme_groups as $state => &$group) {
		if ($state == 'disabled') {
	    foreach ($theme_groups[$state] as $id => &$theme) {
	    	if(in_array($theme, $hidden)) {
	        unset($theme_groups[$state][$id]);
	    	}
	    }
	  }
	}
}

function genix_preprocess_region(&$vars) {
  global $language;
  global $user;
  $logo_url = theme_get_setting('logo_path', 'genix');
  $logo_url = empty($logo_url) ? theme_get_setting('logo', 'genix') : $logo_url;

  $vars['logo_url'] = $logo_url;

  switch($vars['region']) {
    // menu region
    case 'page_top':
      //$user_menu = menu_load_links('menu-utility');
      $user_menu = menu_tree_all_data('menu-utility');
      $user_links = array();
      foreach($user_menu as $ulink){
        if(!empty($ulink['link']['href']) && empty($ulink['link']['hidden'])){
          if($ulink['link']['href'] == 'user' && $user->uid > 0){
            $ulink['link']['title'] = t('My Account');
          }
          $user_links[] = $ulink;
        }
      }
      $vars['user_menu'] = theme('user_menu', array('links' => $user_links));

      $footer_menu_cache = cache_get("footer_menu_data:". $language->language) ;
		  if ($footer_menu_cache) {
		    $footer_menu = $footer_menu_cache->data;
		  }
		  else {
		    $footer_menu = menu_tree_output(_genix_menu_build_tree('main-menu', array('max_depth'=>2)));
		    cache_set("footer_menu_data:" .$language->language, $footer_menu);
		  }
		  //set the active trail
		  $active_trail = menu_get_active_trail();
		  foreach($active_trail as $trail) {
		    if (isset($trail['mlid']) && isset($footer_menu[$trail['mlid'] ] )) {
		      $footer_menu[$trail['mlid']]['#attributes']['class'][] = 'active-trail';
		    }
		  }

      $menu = menu_tree_all_data('main-menu');
      $active_links = array();
      foreach($menu as $menu_item){
        if(empty($menu_item['link']['hidden'])){
          $active_links[] = $menu_item;
        }
      }
		  $vars['dropdown_menu'] = theme('main_menu', array('links' => $active_links));


    break;
    // default footer content
    case 'footer_first':
      $footer_menu_cache = cache_get("footer_menu_data:". $language->language) ;
		  if ($footer_menu_cache) {
		    $footer_menu = $footer_menu_cache->data;
		  }
		  else {
		    $footer_menu = menu_tree_output(_genix_menu_build_tree('main-menu', array('max_depth'=>2)));
		    cache_set("footer_menu_data", $footer_menu);
		  }

      $footer_menu_utility_cache = cache_get("footer_menu_utility_data:". $language->language) ;
		  if ($footer_menu_utility_cache) {
		    $footer_utility_menu = $footer_menu_utility_cache->data;
		  }
		  else {
				$footer_utility_menu = menu_tree_output(_genix_menu_build_tree('menu-utility', array('max_depth'=>2)));
				cache_set("footer_menu_utility_data", $footer_utility_menu);
		  }

		  //set the active trail
		  $active_trail = menu_get_active_trail();
		  foreach($active_trail as $trail) {
		    if (isset($trail['mlid']) && isset($footer_menu[$trail['mlid'] ] )) {
		      $footer_menu[$trail['mlid']]['#attributes']['class'][] = 'active-trail';
		    }
		  }
		  $vars['footer_menu'] = $footer_menu;
		  $vars['footer_utility_menu'] = $footer_utility_menu;
		  $vars['site_name'] = $site_name = variable_get('site_name');
		  $vars['footer_logo'] = l(theme('image', array('path'=>drupal_get_path('theme', 'genix') . "/logo-sm.png", 'alt'=>"$site_name logo")), '', array("html"=>TRUE, 'attributes'=>array('class'=>'logo')));

		  //if(function_exists('defaultcontent_get_node') && ($node = defaultcontent_get_node("email_update")) ) {
		//	  $node = node_view($node);
		//	  $vars['subscribe_form'] = $node['webform'];
		//	}
		  //krumo($vars['footer_menu']);
    break;
  }
}
/* Fix the horrid menu_tree theme function to clearfix since most LI's are floated */
function genix_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/* Add the 'clearfix' class to all unformatted views rows */
function genix_preprocess_views_view_unformatted(&$vars) {
  foreach($vars['classes'] as &$rowclasses) {
    $rowclasses[] = 'clearfix';
  }
  foreach($vars['classes_array'] as &$rowclasses) {
    $rowclasses .= ' clearfix';
  }
  foreach($vars['attributes_array']['class'] as &$rowclasses) {
    $rowclasses .= ' clearfix';
  }
}

function _genix_menu_build_tree($menu_name, $parameters = array()) {
  $tree = menu_build_tree($menu_name, $parameters);
  if (function_exists('i18n_menu_localize_tree')) {
    $tree = i18n_menu_localize_tree($tree);
  }
  return $tree;
}

function genix_theme($existing, $type, $theme, $path) {
  return array(
    'links__system_main_menu' => array( //Override the main menu theme
      'variables' => array(),
      'template' => 'templates/links__system_main_menu', //Note that the template name defined here has no .tpl.php extension.
    ),
    'main_menu' => array( //Override the main menu theme
      'variables' => array(),
      'template' => 'templates/menu__main_menu', //Note that the template name defined here has no .tpl.php extension.
    ),
    'user_menu' => array( //Override the main menu theme
      'variables' => array(),
      'template' => 'templates/menu__user_menu', //Note that the template name defined here has no .tpl.php extension.
    ),
  );
}
