<?php
// Heading
$_['heading_title']       = '<span style="border-radius:2px;color:#fff;background:#8fbb6c;padding:2px 5px;">HP</span> Snap MIGS';

$_['heading_title2']      = 'Snap MIGS';

// Text
$_['text_extension']	 = 'Extensions';
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Success: You have modified Snap MIGS configuration!';
$_['text_snapmigs']     = '<a href="https://midtrans.com" target="_blank"><img src="view/image/payment/midtrans.png" width="120px" alt="Midtrans" title="Snap" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_live']          = 'production';
$_['text_sandbox']       = 'sandbox';
$_['text_successful']    = 'Always Successful';
$_['text_fail']          = 'Always Fail';
$_['text_edit']          = 'Configure Midtrans Snap MIGS';

// Entry
$_['entry_environment']  = 'Environment'; // v2 API only
$_['entry_merchant_id']  = 'Merchant Id'; // v2 API only
$_['entry_client_key']   = 'Client Key'; // v2 API only
$_['entry_server_key']   = 'Server Key'; // v2 API only
$_['entry_order_status'] = 'Order Status';
$_['entry_oneclick']     = 'One click';
$_['entry_geo_zone']     = 'Geo Zone';
$_['entry_status']       = 'Status';
$_['entry_sort_order']   = 'Sort Order:';
$_['entry_expiry']   	 = 'Custom Expire';
$_['entry_custom_field'] = 'Custom Field';
$_['entry_currency_conversion'] = 'Currency conversion to IDR';
$_['entry_display_name'] = 'Display name:';

// HPWD
$_['entry_snap_success_mapping']    = 'Success Order Status';
$_['help_snap_success_mapping']     = 'Change to the following order status once the payment success';
$_['entry_snap_challenge_mapping']  = 'Pending Order Status';
$_['help_snap_challenge_mapping']   = 'Change to the following order status once the payment pending';
$_['entry_snap_failure_mapping']    = 'Failure Order Status';
$_['help_snap_failure_mapping']     = 'Change to the following order status once the payment failure';

// Error
$_['error_permission']   = 'Warning: You do not have permission to modify Snap MIGS!';
$_['error_client_key']   = 'Client Key is required!';
$_['error_server_key']   = 'Server Key is required!';
$_['error_currency_conversion'] = 'Currency conversion rate is required when IDR currency is not installed in the system!';
$_['error_display_name'] = 'Please specify a name for this payment method!';
$_['error_min_txn']      = 'Please specify a minimum amount for installment!';
?>