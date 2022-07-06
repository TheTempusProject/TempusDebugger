<?php
/**
 * autoload.php
 *
 * Uses the TempusProjectCore Autoloader if it has been defined.
 *
 * @version 0.0
 * @author  Joey Kimsey <Joey@thetempusproject.com>
 * @link    https://TheTempusProject.com
 * @license https://opensource.org/licenses/MIT [MIT LICENSE]
 */
namespace TempusDebugger;

use TempusProjectCore\Classes\Autoloader;
use TempusDebugger\TempusDebugger;

require_once 'constants.php';

if ( class_exists( 'TempusProjectCore\Classes\Autoloader' ) ) {
    $Autoloader = new Autoloader;
    $Autoloader->setRootFolder( __DIR__ );
    $Autoloader->addNamespace( 'TempusDebugger' );
    $Autoloader->register();
    define('TEMPUS_DEBUGGER_AUTOLOADED', true);
}