<?php declare( strict_types = 1 );
/**
 * DSS Disable Checked On Top
 *
 * @package     DSS Disable Checked On Top
 * @author      Per Soderlind
 * @copyright   2020 Per Soderlind
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: DSS Disable Checked On Top
 * Plugin URI: https://github.com/dss-web/dss-disable-checked-on-top
 * GitHub Plugin URI: https://github.com/dss-web/dss-disable-checked-on-top
 * Description: On the post edit screen, disable "checked on top" for selected categories.
 * Version:     0.0.2
 * Author:      Per Soderlind
 * Author URI:  https://soderlind.no
 * Text Domain: dss-disable-checked-on-top
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace Soderlind\Plugin\Misc;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die();
}

add_filter(
	'wp_terms_checklist_args',
	function ( $args ) {

		$args['checked_ontop'] = false;
		return $args;

	}
);
