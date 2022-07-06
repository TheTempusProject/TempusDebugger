<?php
if (!defined('E_STRICT')) {
    define('E_STRICT', 2048);
}
if (!defined('E_RECOVERABLE_ERROR')) {
    define('E_RECOVERABLE_ERROR', 4096);
}
if (!defined('E_DEPRECATED')) {
    define('E_DEPRECATED', 8192);
}
if (!defined('E_USER_DEPRECATED')) {
    define('E_USER_DEPRECATED', 16384);
}
if (!defined('TEMPUS_DEBUGGER_SECURE_HASH')) {
    define('TEMPUS_DEBUGGER_SECURE_HASH', '');
}

# Tell the app all constants have been loaded.
    define('TEMPUS_DEBUGGER_CONSTANTS_LOADED', true);