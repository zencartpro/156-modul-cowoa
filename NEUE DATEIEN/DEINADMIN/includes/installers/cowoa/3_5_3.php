<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.5.3' WHERE configuration_key = 'COWOA_MODUL_VERSION' LIMIT 1;");