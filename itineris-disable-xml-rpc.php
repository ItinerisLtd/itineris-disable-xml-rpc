<?php
/**
 * Plugin Name:     Itineris Disable XML-RPC
 * Plugin URI:      https://github.com/ItinerisLtd/itineris-disable-xml-rpc
 * Description:     Disable WordPress XML-RPC via actions and filters.
 * Version:         0.1.1
 * Author:          Itineris Limited
 * Author URI:      https://itineris.co.uk
 * License:         GPL-2.0-or-later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare(strict_types=1);

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('xmlrpc_enabled', '__return_false', PHP_INT_MAX);

add_filter('xmlrpc_methods', '__return_empty_array', PHP_INT_MAX);

add_filter('xmlrpc_element_limit', function (): int {
    return 1;
}, PHP_INT_MAX);
