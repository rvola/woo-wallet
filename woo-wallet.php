<?php

/**
 * Plugin Name: TeraWallet
 * Plugin URI: https://wordpress.org/plugins/woo-wallet/
 * Description: The leading wallet plugin for WooCommerce with partial payment, refunds, cashbacks and what not!
 * Author: WCBeginner
 * Author URI: https://wcbeginner.com/
 * Version: 1.3.24
 * Requires at least: 4.4
 * Tested up to: 5.9
 * WC requires at least: 3.0
 * WC tested up to: 6.3
 * 
 * GitHub Plugin URI: https://github.com/rvola/woo-wallet
 * Update URI: https://github.com/rvola/woo-wallet
 * Text Domain: woo-wallet
 * Domain Path: /languages/
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define WOO_WALLET_PLUGIN_FILE.
if ( ! defined( 'WOO_WALLET_PLUGIN_FILE' ) ) {
    define( 'WOO_WALLET_PLUGIN_FILE', __FILE__);
}
// include dependencies file
if ( ! class_exists( 'Woo_Wallet_Dependencies' ) ){
    include_once dirname( __FILE__) . '/includes/class-woo-wallet-dependencies.php';
}

// Include the main class.
if ( ! class_exists( 'WooWallet' ) ) {
    include_once dirname( __FILE__) . '/includes/class-woo-wallet.php';
}
/**
 * Returns the main instance of WooWallet.
 *
 * @since  1.1.0
 * @return WooWallet
 */
function woo_wallet(){
    return WooWallet::instance();
}

$GLOBALS['woo_wallet'] = woo_wallet();
