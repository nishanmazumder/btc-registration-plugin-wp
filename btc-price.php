<?php

/**
 * Plugin Name:       BTC Price
 * Plugin URI:        https://www.nishanmazumder.com/
 * Description:       BTC-Price will update the current btc value
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            BDSOFTcr
 * Author URI:        https://www.nishanmazumder.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       btc-price-text-domain
 * Domain Path:       /languages
 */


//BTC Price Update Admin
require(plugin_dir_path(__FILE__) . 'btc-price-admin.php');

//Script
require(plugin_dir_path(__FILE__) . 'btc-script.php');

//User Registration Form
require(plugin_dir_path(__FILE__) . 'btc-form.php');

//User Mail
require(plugin_dir_path(__FILE__) . 'btc-mail.php');
