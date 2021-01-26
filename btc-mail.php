<?php

function btc_reg_form()
{
    //$details = $_POST['details'];

    if (isset($_POST['details'])) {

        parse_str($_POST['details'], $info);

        // Session data
        nm_session_data($info);

        //Mail Send
        if ($_SESSION['pay'] == "Payment") {
            nm_mail_send();
        }
    }

    wp_die();
}


// User data save to session
function nm_session_data($info)
{
    // Session start
    if (!session_id()) {
        session_start();
    }

    if ($info['reg'] == "Registration") {
        // Step One
        $_SESSION['nmName'] = $info['nmName'];
        $_SESSION['nmMail'] = $info['nmMail'];
        $_SESSION['nmPasw'] = $info['nmPasw'];
    } elseif ($info['per'] == "Personal") {
        // Step two
        $_SESSION['nmYName'] = $info['nmYName'];
        $_SESSION['nmPhone'] = $info['nmPhone'];
        $_SESSION['nmCountry'] = $info['nmCountry'];
        $_SESSION['nmBankName'] = $info['nmBankName'];
        $_SESSION['nmBankCountry'] = $info['nmBankCountry'];
        $_SESSION['nmBankAcNo'] = $info['nmBankAcNo'];
        $_SESSION['nmBankHolder'] = $info['nmBankHolder'];
        $_SESSION['nmCash'] = $info['nmCash'];
        $_SESSION['nmInfo'] = $info['nmInfo'];
    } else {
        // Step three
        $_SESSION['pay'] = $info['pay'];
        $_SESSION['nmSellConUSDh'] = $info['nmSellConUSDh'];
        $_SESSION['nmSendBTC'] = $info['nmSendBTC'];
        $_SESSION['nmPayWith'] = $info['nmPayWith'];
    }
}

function nm_mail_send()
{
    // Mail Details
    $to = $_SESSION['nmMail'];
    $subject = 'New User Registration';
    $cc = get_option('admin_email');
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <'.$cc.'>' . "\r\n";
    $headers .= 'Cc: '.$cc.''. "\r\n";

    $message = '<html><body>';

    //Basic Info
    $message .= '<h2>Basic Info</h2>';
    $message .= '<strong>Name :</strong><span>' . $_SESSION["nmName"] . '</span><br>';
    $message .= '<strong>Email :</strong><span>' . $_SESSION["nmMail"] . '</span><br>';
    $message .= '<strong>Password :</strong><span>' . $_SESSION["nmPasw"] . '</span><br>';

    //Personal Info
    $message .= '<h2>Personal Info</h2>';
    $message .= '<strong>Name :</strong><span>' . $_SESSION["nmYName"] . '</span><br>';
    $message .= '<strong>Phone :</strong><span>' . $_SESSION["nmPhone"] . '</span><br>';
    $message .= '<strong>Country :</strong><span>' . $_SESSION["nmCountry"] . '</span><br>';
    $message .= '<strong>Bank Name :</strong><span>' . $_SESSION["nmBankName"] . '</span><br>';
    $message .= '<strong>Bank Country :</strong><span>' . $_SESSION["nmBankCountry"] . '</span><br>';
    $message .= '<strong>Bank Ac. No. :</strong><span>' . $_SESSION["nmBankAcNo"] . '</span><br>';
    $message .= '<strong>Bank Holder :</strong><span>' . $_SESSION["nmBankHolder"] . '</span><br>';
    $message .= '<strong>Wallet add. :</strong><span>' . $_SESSION["nmWallet"] . '</span><br>';
    $message .= '<strong>Cash :</strong><span>' . $_SESSION["nmCash"] . '</span><br>';
    $message .= '<strong>Add. Info :</strong><span>' . $_SESSION["nmInfo"] . '</span><br>';

    //Payment Info
    $message .= '<h2>Payment Info</h2>';
    $message .= '<strong>Sell Amount :</strong><span>' . $_SESSION["nmCash"] . '</span><br>';
    $message .= '<strong>Receive Amount :</strong><span>' . $_SESSION["nmSellConUSDh"] . '</span><br>';
    $message .= '<strong>Send BTC To :</strong><span>' . $_SESSION["nmSendBTC"] . '</span><br>';
    $message .= '<strong>Pay With :</strong><span>' . $_SESSION["nmPayWith"] . '</span><br>';

    $message .= '</body></html>';

    //Send
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo "Mail Sent";
    } else {
        echo "not send";
    }

    // Session destroy
    session_destroy();
}
