<?php
/**
 * Plugin Name: Sandbox restrict public user enumeration
 * Version: 1.0.0
 * Plugin URI: http://www.dev-themes.com
 * Description: Restrict public user enumeration in a WordPress multisite
 * Author: Thomas Fellinger
 * Author URI: http://www.netzgestaltung.at
 * License: GPL v2
 * Copyright 2020  Thomas Fellinger  (email : office@netzgestaltung.at)

 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Must use plugins load
 * WordPress does not automagically looks into folders here
 * @see https://wordpress.org/support/article/must-use-plugins/
 * @see https://premium.wpmudev.org/blog/why-you-shouldnt-use-functions-php/
 */

/**
 * Plugin setup hook
 * ================
 */
add_action('plugins_loaded', 'sandbox_restrict_user_enumeration');

function sandbox_restrict_user_enumeration(){
  // Removes the endpoints for '/wp/v2/users'
  add_filter('rest_endpoints', 'sandbox_rest_endpoints');
  
  // Redirect Author Page to 404
  add_action('template_redirect', 'sandbox_author_redirect');
}

/**
 * Removes the endpoints for '/wp/v2/users'
 * - if not logged in
 * - not allowed to edit posts in current site/blog
 * 
 * @added 2022-11-11 Thomas Fellinger
 * @see 
 * - https://maheshwaghmare.com/wordpress/blog/default-rest-api-endpoints/
 * - https://developer.wordpress.org/reference/hooks/rest_endpoints/
 * - https://wordpress.org/support/topic/blocking-some-rest-api-endpoints/
 * - https://wordpress.stackexchange.com/questions/388307/disable-part-of-endpoints-wordpress-api
 * - https://wpreset.com/remove-default-wordpress-rest-api-routes-endpoints/
 */
function sandbox_rest_endpoints($endpoints){
  $routes = array('/wp/v2/users', '/wp/v2/users/(?P<id>[\d]+)');
  
  if ( !is_user_logged_in() || current_user_can_for_blog(get_current_blog_id(), 'edit_posts') === false ) {
    foreach ( $routes as $route ) {
      if ( !empty($endpoints[$route]) ) {
        unset($endpoints[$route]);
      }
    }
  }
  return $endpoints;
}

/**
 * Redirect Author Page to 404
 * - does not show something to see here
 * 
 * @added 2022-11-19 Thomas Fellinger
 * @see 
 * - https://www.vpsbasics.com/cms/how-to-disable-the-author-page-in-wordpress/
 */
function sandbox_author_redirect(){
  if ( is_author() ) {
    wp_safe_redirect('/404', 301);
    exit;
  }
}

