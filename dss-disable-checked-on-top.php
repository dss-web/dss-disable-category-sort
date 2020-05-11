<?php declare( strict_types = 1 );
/**
 * DSS Disable Category Sort on Post Screen
 *
 * @package     DSS Disable Category Sort on Post Screen
 * @author      Per Soderlind
 * @copyright   2020 Per Soderlind
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: DSS Disable Category Sort on Post Screen
 * Plugin URI: https://github.com/dss-web/dss-disable-category-sort
 * GitHub Plugin URI: https://github.com/dss-web/dss-disable-category-sort
 * Description: Disable auto sort of categorie and therms on the Post Edit page
 * Version:     0.0.1
 * Author:      Per Soderlind
 * Author URI:  https://soderlind.no
 * Text Domain: dss-disable-category-sort
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
