<?php
/**
 * This is an example of how you can use the WhatsAPI to request a code
 * from the WhatsAPP server, register that code and retrieve your password.
 *
 * Once you have your password you will then be able to use it in
 * examplefunctional.php to actually send and receive messages.
 *
 */


require_once('whatsprot.class.php');

/**
 * Config data.
 */
$debug = true;

// $username = '255759921875';                      // Telephone number including the country code without '+' or '00'.
// $identity = '%a3f1w%07x%ea%88%b0%5d%f4%ab%25%15%e5%ff%2at%13%1f'; // Obtained during registration with this API or using MissVenom (https://github.com/shirioko/MissVenom) to sniff from your phone.
// $nickname = 'Aim Group';                         // This is the username displayed by WhatsApp clients.

// $username = '254725788168';                      // Telephone number including the country code without '+' or '00'.
$username = '265881598536';                      // Telephone number including the country code without '+' or '00'.
// $identity = '%a3f1w%07x%ea%88%b0%5d%f4%ab%25%15%e5%ff%2at%13%1f'; // Obtained during registration with this API or using MissVenom (https://github.com/shirioko/MissVenom) to sniff from your phone.
$identity = '%ab%db%f6%0a%84%de%08%c51d%95%eb%ee4a%b7%08y%e0'; // Obtained during registration with this API or using MissVenom (https://github.com/shirioko/MissVenom) to sniff from your phone.
$nickname = 'Buy More';                         // This is the username displayed by WhatsApp clients.


// Create a instance of WhastPort.
$w = new WhatsProt($username, $identity, $nickname, $debug);

// How to create an account __ONLY__ if you do not have a associated to our phone number.
// You can test your credentials with: $w->checkCredentials() (BUT ONLY ONLY IF YOU HAVE THE IDENTITY);

/**
 * First request a registration code from WhatsApp.
 *
 * @param $method
 *   Accepts only 'sms' or 'voice' as a value.
 * @param $countryCody
 *   ISO Country Code, 2 Digit.
 * @param $langCode
 *   ISO 639-1 Language Code: two-letter codes.
 *
 * @return object
 *   An object with server response.
 *   - status: Status of the request (sent/fail).
 *   - reason: Reason of the status (e.g. too_recent/missing_param/bad_param).
 *   - length: Registration code length.
 *   - method: Used method.
 *   - retry_after: Waiting time before requesting a new code.
 */
// $w->codeRequest('sms');


// You must wait until you receive a code from WhatsApp, either to your phone via sms
// or phonecall depending on what you selected above.

// The function below will only work once you know your code!


/**
 * Second register account on WhatsApp using the provided code with $w->codeRequest();.
 *
 * @param integer $code
 *   Numeric code value provided on codeRequest().
 *
 * @return object
 *   An object with server response.
 *   - status: Account status.
 *   - login: Phone number with country code.
 *   - pw: Account password.
 *   - type: Type of account.
 *   - expiration: Expiration date in UNIX Timestamp.
 *   - kind: Kind of account.
 *   - price: Formatted price of account.
 *   - cost: Decimal amount of account.
 *   - currency: Currency price of account.
 *   - price_expiration: Price expiration in UNIX Timestamp.
 */
// $w->codeRegister('210370');
$w->codeRegister('579371');
var_dump($w);

// IT IS VERY IMPORTANT THAT YOU NOTE AND KEEP YOUR DETAILS.
// YOU WILL NEED TO UPDATE THE SCRIPT WITH THE PASSWORD ETC.

//Use exampleFunctional.php to continue with the examples.
