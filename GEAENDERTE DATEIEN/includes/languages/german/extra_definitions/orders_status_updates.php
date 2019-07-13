<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders_status_updates.php for COWOA 2019-07-13 16:39:16Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Aktualisierung der Bestellung');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Detaillierte Rechnung:');
define('OSH_EMAIL_TEXT_COWOA_URL', 'Bestellstatus einsehen:');
define('OSH_EMAIL_TEXT_COWOA_URL_CLICK', 'Um Ihren Bestellstatus zu �berpr�fen bitte hier klicken');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentare zu Ihrer Bestellung: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Ihr Bestellstatus wurde aktualisiert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Ihr Bestellstatus hat sich nicht ge�ndert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Aktueller Status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Alter Status:</strong> %1$s, <strong>Neuer Status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Wenn Sie Fragen haben, antworten Sie bitte auf dieses Email.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[BESTELLSTATUS]');