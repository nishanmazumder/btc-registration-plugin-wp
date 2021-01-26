<?php

// function create_plugin_database_table()
// {
//     global $table_prefix, $wpdb;

//     $tblname = 'test_test';
//     $wp_track_table = $table_prefix . "$tblname ";

//     #Check to see if the table exists already, if not, then create it

//     if($wpdb->get_var( "'$wp_track_table'" ) != $wp_track_table) 
//     {

//         $sql = "CREATE TABLE '". $wp_track_table . "' ( ";
//         $sql .= "  'id'  int(11)   NOT NULL auto_increment, ";
//         $sql .= "  'pincode'  int(128)   NOT NULL, ";
//         $sql .= "  PRIMARY KEY 'order_id' ('id') "; 
//         $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
//         require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
//         dbDelta($sql);
//     }
// }

//  register_activation_hook( __FILE__, 'create_plugin_database_table' );

//BTC Price Update Admin
add_action('admin_menu', 'btc_rate_change');

//BTC Current Value
add_action('wp_footer', 'nm_btc_current_price');

// Admin menu for BTC value
function btc_rate_change()
{
    add_menu_page(
        __('BTC Price', 'my-textdomain'),
        __('BTC Price', 'my-textdomain'),
        'manage_options',
        'btc-price/btc-price.php',
        'nm_btc_form',
        'dashicons-money-alt',
        3
    );
}

function nm_btc_form()
{
    global $wpdb;

    //Insert Data
    if (isset($_POST['nmSbtBtc'])) {
        $btcPrice = $_POST['nmBtcPrice'];


        $table = 'wp_btc_value';
        $data = array('wp_btc_price' => $btcPrice);
        $where = array('id' => 1);
        $wpdb->update($table, $data, $where);
    }

    //Select Data
    $btc_val = $wpdb->get_row("SELECT * FROM wp_btc_value"); ?>

    <style>
        .nm-btc-sbt td {
            padding-left: 0px;
        }

        .nm-btc-sbt .nm-submit {
            margin-top: 0px;
            background: #0073AA;
            color: #fff;
            outline: none;
            border: none;
            padding: 5px 10px;
            border-radius: 2px;
            cursor: pointer;
        }
    </style>
    <h1>BTC Price</h1>
    <form method="post" action="" class="nm-btc-sbt">
        <table class="form-table nm-btc-table">
            <tr valign="top">
                <td><input type="number" step="any" name="nmBtcPrice" value="<?php echo $btc_val->wp_btc_price; ?>" /></td>
            </tr>
        </table>
        <input type="submit" class="nm-submit" name="nmSbtBtc" value="Submit">
    </form>
<?php }


// BTC value multiplication for input data

function nm_btc_current_price()
{
    global $wpdb;
    $btc_val = $wpdb->get_row("SELECT * FROM wp_btc_value"); ?>
    ?>
    <script>
        jQuery(document).ready(function($) {

            $("#nmStepThreeSbtBtn").click(function() {
                var nmCash = $("#nmCash").val();
                $("#nmSell").val(nmCash);
                $("#nmSellConUSD").val(nmCash * <?php echo $btc_val->wp_btc_price; ?>);
                $("#nmSellConUSDh").val(nmCash * <?php echo $btc_val->wp_btc_price; ?>);
            });
        })
    </script>
<?php
}
