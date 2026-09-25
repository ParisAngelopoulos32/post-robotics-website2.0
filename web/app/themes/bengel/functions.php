<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include_once "inc/inc.php";

// PHP Console log function
function console_log( ...$data ): void {
	echo "<script>console.log(" . json_encode( $data ) . ");</script>";
}

// Remove default Gravity Forms styling
add_filter( 'gform_disable_form_theme_css', '__return_true' );
add_theme_support( 'title-tag' );

// Google Maps API key for the ACF Google Map field
add_filter( 'acf/fields/google_map/api', function ( $api ) {
	$api['key'] = GOOGLE_API_KEY;
	return $api;
} );

// Load the Google Maps JS API on the front-end and initialize the acf-map markers.
// The init function is printed inline (rather than in the bundled theme script) so it
// is guaranteed to exist before the async Google Maps script calls it as its callback.
add_action( 'wp_footer', function () {
	if ( ! GOOGLE_API_KEY ) {
		return;
	}
	?>
	<script>
		function initAcfMaps() {
			document.querySelectorAll('.acf-map').forEach(function (el) {
				// Read the marker data before google.maps.Map() replaces the
				// container's contents, otherwise the .marker divs are already gone.
				var markers = [];
				el.querySelectorAll('.marker').forEach(function (marker) {
					var lat = parseFloat(marker.dataset.lat);
					var lng = parseFloat(marker.dataset.lng);

					if (!isNaN(lat) && !isNaN(lng)) {
						markers.push({lat: lat, lng: lng});
					}
				});

				var zoom = parseInt(el.dataset.zoom || '16', 10);
				var center = markers[0] || {lat: 0, lng: 0};

				var map = new google.maps.Map(el, {
					zoom: zoom,
					center: center,
				});

				markers.forEach(function (position) {
					new google.maps.Marker({position: position, map: map});
				});
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=<?= esc_attr( GOOGLE_API_KEY ) ?>&callback=initAcfMaps" async defer></script>
	<?php
}, 20 );


\Freekattema\Wp\ThemeSetup\Theme::init( [
	'hide_admin_posts'                 => true,
	'hide_admin_comments'              => true,
	'hide_admin_tools'                 => true,
	'remove_default_wordpress_styling' => true,
	'remove_wordpress_jquery'          => false,
	'hide_must_use_plugins'            => true,
	'hide_admin_dashboard'             => true,
	'hide_admin_bar'                   => true,
	'admin_bar_cleanup'                => true,
	'hide_admin_dashboard_widgets'     => true,
	'register_nav_menus'               => [
		'main-menu'   => 'Main Menu',
		'footer-menu' => 'Footer Menu',
	],
] );


function get_vite_files() {
	return [
		'inc/scripts/theme.ts',
		'inc/styling/theme.scss'
	];
}
