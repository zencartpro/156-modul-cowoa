<?php
/**
 * no_account header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2007 J_Schilz
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: no_account header_php.php for COWOA 2019-07-04 07:19:00 webchills
 */

// This should be first line of the script:
$zco_notifier->notify('NOTIFY_HEADER_START_NO_ACCOUNT');


require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
include(DIR_WS_MODULES . zen_get_module_directory(FILENAME_NO_ACCOUNT));

$breadcrumb->add(NAVBAR_TITLE);

// This should be last line of the script:
$zco_notifier->notify('NOTIFY_HEADER_END_NO_ACCOUNT');