<?php
/*
 * Mailer Configuration File
 * Author: Webisir
 * Author URI: http://themeforest.net/user/webisir
*/

/* =========================================== MAIN RECIPIENT  =========================================== */

$to = 'ajra.toni@icloud.com';						// TODO: Replace with your main email

/* ========================================= APPOINTMENT FORM ============================================ */

$send_to_artist = false;							// Set TRUE to send the message also to the selected artist
$artists_email = array(
	//'Artist A' => 'artist_a@domain.com',
    //'Artist B' => 'artist_b@domain.com',
	);

/* ============================================ SMTP SETTINGS ============================================ */

$smtp = true;							// Set TRUE if you want use a custom smtp server
$smtp_username = '1fba9d8d53fd7b';					// Add your smtp username
$smtp_password = '55f8802894ff74';					// Add your smtp password
$smtp_host = 'pop3.mailtrap.io';						// Set the hostname of the mail server (ex. smtp.gmail.com)
$smtp_port = '1100';						// Set the SMTP port number - likely to be 25, 465 or 587
$smtp_secure = '';						// Set the encryption system to use. Accepted values: 'ssl' or 'tls'