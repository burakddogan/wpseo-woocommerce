<?php

if ( ! class_exists( 'Yoast_Product_WPSEO_WooCommerce_v2', false ) && class_exists( 'Yoast_Product_v2' ) ) {

	/**
	 * Class Yoast_Product_WPSEO_WooCommerce
	 */
	class Yoast_Product_WPSEO_WooCommerce_v2 extends Yoast_Product_v2 {

		public function __construct() {
			$file = plugin_basename( Yoast_WooCommerce_SEO::get_plugin_file() );
			$slug = dirname( $file );

			parent::__construct(
				'http://yoast.com/edd-sl-api',
				'WooCommerce Yoast SEO',
				$slug,
				Yoast_WooCommerce_SEO::VERSION,
				'https://yoast.com/wordpress/plugins/yoast-woocommerce-seo/',
				'admin.php?page=wpseo_licenses#top#licenses',
				'yoast-woo-seo',
				'Yoast',
				$file
			);
		}
	}
}
