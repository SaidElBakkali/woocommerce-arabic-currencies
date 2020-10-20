<?php
/**
 * Plugin Name: WooCommerce Arabic Currencies
 *
 * @package           WooCommerce_Arabic_Currencies
 * @author            Said El Bakkali <contact@saidelbakkali.com>
 * @license           GPLv3
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin URI:          https://github.com/SaidElBakkali/woocommerce-arabic-currencies
 * Description:         This plugin adds custom arabic currenciesfor WooCommerce.
 * Version:             1.2.8
 * Author:              Said El Bakkali
 * Author URI:          https://saidelbakkali.com/
 * Text Domain:         woocommerce-arabic-currencies
 * Domain Path:        /locales/
 * Requires at least:  5.3
 * Requires PHP:       7.0
 *
 * @package woocommerce_arabic_currencies
 */

if ( ! defined( 'WPINC' ) ) {
	exit; // Exit if accessed directly.
}

require_once ABSPATH . 'wp-admin/includes/plugin.php';

/**
* Check if WooCommerce is active
*/
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {

	/**
	* Add arabic currencies
	*/
	add_filter( 'woocommerce_currencies', 'woocommerce_arabic_currencies' );

	/**
	 * Adds custom arabic currencies to WooCommerce
	 *
	 * @param array $currencies
	 * @return array
	 *
	 * @since 1.0.0
	 */
	function woocommerce_arabic_currencies( $currencies ) {

		$currencies['AED'] = esc_html__( 'Emirati Dirham', 'woocommerce-arabic-currencies' );
		$currencies['BHD'] = esc_html__( 'Bahraini Dinar', 'woocommerce-arabic-currencies' );
		$currencies['DZD'] = esc_html__( 'Algerian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['EGP'] = esc_html__( 'Egyptian Pound', 'woocommerce-arabic-currencies' );
		$currencies['FDJ'] = esc_html__( 'Djibouti Franc', 'woocommerce-arabic-currencies' );
		$currencies['IQD'] = esc_html__( 'Iraqi Dinars', 'woocommerce-arabic-currencies' );
		$currencies['JOD'] = esc_html__( 'Jordanian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['KMF'] = esc_html__( 'Comorian Franc', 'woocommerce-arabic-currencies' );
		$currencies['KWD'] = esc_html__( 'Kuwaiti Dinar', 'woocommerce-arabic-currencies' );
		$currencies['LBP'] = esc_html__( 'Lebanese Pound', 'woocommerce-arabic-currencies' );
		$currencies['LYD'] = esc_html__( 'Libyan Dinar', 'woocommerce-arabic-currencies' );
		$currencies['MAD'] = esc_html__( 'Moroccan Dirham', 'woocommerce-arabic-currencies' );
		$currencies['MRO'] = esc_html__( 'Mauritania Ouguiya', 'woocommerce-arabic-currencies' );
		$currencies['OMR'] = esc_html__( 'Omani Rial', 'woocommerce-arabic-currencies' );
		$currencies['QAR'] = esc_html__( 'Qatari Riyal', 'woocommerce-arabic-currencies' );
		$currencies['SAR'] = esc_html__( 'Saudi Riyal', 'woocommerce-arabic-currencies' );
		$currencies['SDG'] = esc_html__( 'Sudanese Pound', 'woocommerce-arabic-currencies' );
		$currencies['SOS'] = esc_html__( 'Somali shilling', 'woocommerce-arabic-currencies' );
		$currencies['SYP'] = esc_html__( 'Syrian Pound', 'woocommerce-arabic-currencies' );
		$currencies['TND'] = esc_html__( 'Tunisian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['YER'] = esc_html__( 'Yemen Riyal', 'woocommerce-arabic-currencies' );

		return $currencies;
	}

	/**
	 *  Add arabic currencies symbols
	 */
	add_filter( 'woocommerce_currency_symbol', 'woocommerce_arabic_currencies_symbol', 10, 2 );

	/**
	 * Adds custom arabic currencies symbols to WooCommerce
	 *
	 * @param  string $currency_symbol
	 * @param  string $currency
	 * @return string
	 *
	 * @since 1.0.0
	 */
	function woocommerce_arabic_currencies_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'MAD':
				$currency_symbol = esc_html__( 'MAD', 'woocommerce-arabic-currencies' );
				break;
			case 'EGP':
				$currency_symbol = esc_html__( 'EGP', 'woocommerce-arabic-currencies' );
				break;
			case 'IQD':
				$currency_symbol = esc_html__( 'IQD', 'woocommerce-arabic-currencies' );
				break;
			case 'SYP':
				$currency_symbol = esc_html__( 'SYP', 'woocommerce-arabic-currencies' );
				break;
			case 'LBP':
				$currency_symbol = esc_html__( 'LBP', 'woocommerce-arabic-currencies' );
				break;
			case 'JOD':
				$currency_symbol = esc_html__( 'JOD', 'woocommerce-arabic-currencies' );
				break;
			case 'YER':
				$currency_symbol = esc_html__( 'YER', 'woocommerce-arabic-currencies' );
				break;
			case 'LYD':
				$currency_symbol = esc_html__( 'LYD', 'woocommerce-arabic-currencies' );
				break;
			case 'SDG':
				$currency_symbol = esc_html__( 'SDG', 'woocommerce-arabic-currencies' );
				break;
			case 'TND':
				$currency_symbol = esc_html__( 'TND', 'woocommerce-arabic-currencies' );
				break;
			case 'DZD':
				$currency_symbol = esc_html__( 'DZD', 'woocommerce-arabic-currencies' );
				break;
			case 'MRO':
				$currency_symbol = esc_html__( 'MRO', 'woocommerce-arabic-currencies' );
				break;
			case 'AED':
				$currency_symbol = esc_html__( 'AED', 'woocommerce-arabic-currencies' );
				break;
			case 'SOS':
				$currency_symbol = esc_html__( 'SOS', 'woocommerce-arabic-currencies' );
				break;
			case 'FDJ':
				$currency_symbol = esc_html__( 'FDJ', 'woocommerce-arabic-currencies' );
				break;
			case 'KMF':
				$currency_symbol = esc_html__( 'KMF', 'woocommerce-arabic-currencies' );
				break;
			case 'BHD':
				$currency_symbol = esc_html__( 'BHD', 'woocommerce-arabic-currencies' );
				break;
			case 'KWD':
				$currency_symbol = esc_html__( 'KWD', 'woocommerce-arabic-currencies' );
				break;
			case 'OMR':
				$currency_symbol = esc_html__( 'OMR', 'woocommerce-arabic-currencies' );
				break;
			case 'QAR':
				$currency_symbol = esc_html__( 'QAR', 'woocommerce-arabic-currencies' );
				break;
			case 'SAR':
				$currency_symbol = esc_html__( 'SAR', 'woocommerce-arabic-currencies' );
				break;
		}
		return $currency_symbol;
	}

	/**
	 * Load Arabic Currencies plugin translation
	 */
	add_action( 'plugins_loaded', 'woocommerce_arabic_currencies_translation' );

	/**
	 * Load plugin textdomain.
	 *
	 * @since 1.0.0
	 */
	function woocommerce_arabic_currencies_translation() {

		load_plugin_textdomain( 'woocommerce-arabic-currencies', false, dirname( plugin_basename( __FILE__ ) ) . '/locales' );

	}

	// Create liink to settings page from plugins screen.
	add_filter(
		'plugin_action_links_' . plugin_basename( __FILE__ ),
		function ( $links ) {
			$mylinks = array(
				sprintf(
					'<a href="%s">%s</a>',
					admin_url( 'admin.php?page=wc-settings#pricing_options-description' ),
					esc_html__( 'Settings', 'woocommerce-arabic-currencies' )
				),
			);
			return array_merge( $links, $mylinks );
		}
	);
}
