<?php
/**
 * PWCC Multi-Domain.
 *
 * @package     PWCCMultiDomain
 * @author      Peter Wilson
 * @copyright   2018 Peter Wilson
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: PWCC Multi-Domain.
 * Plugin URI:  https://peterwilson.cc/
 * Description: Allow multiple domains for a single WP site..
 * Version:     1.0.0
 * Author:      Peter Wilson
 * Author URI:  https://peterwilson.cc/
 * Text Domain: pwcc-multi-domain
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace PWCC\MultiDomain;

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', __NAMESPACE__ . '\\bootstrap' );
