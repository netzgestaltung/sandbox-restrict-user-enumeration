<?php
/**
 * Plugin Name: Sandbox restrict public user enumeration
 * Version: 1.0.3
 * Plugin URI: http://www.dev-themes.com
 * Description: Restrict public user enumeration in a WordPress multisite
 * Author: Thomas Fellinger
 * Author URI: http://www.netzgestaltung.at
 * License: GPL v2
 * Copyright 2022  Thomas Fellinger  (email : office@netzgestaltung.at)

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
 *
 * Changelog
 * @added 1.0.3 2022-11-24 sandbox_filter_xml_sitemap_users
 * @added 1.0.2 2022-11-21 revised documentation
 * @added 1.0.1 2022-11-19 sandbox_filter_rest_endpoint_users, sandbox_author_redirect
 */
  require WPMU_PLUGIN_DIR . '/sandbox-restrict-user-enumeration/sandbox-restrict-user-enumeration.php';
?>

