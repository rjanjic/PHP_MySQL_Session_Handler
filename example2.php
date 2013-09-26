<?php 

/** PHP MySQL Session Handler Example - Use same db connection for sessions and other coding ...
 *	
 *	PHP version required (4 >= 4.0.2, 5)
 *	
 */

include "MySQL_wrapper.class.php";
include "MySQL_Session_Handler.class.php";

define('MYSQL_HOST', 'localhost');
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DATABASE', 'users');

$db = new MySQL_wrapper(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);

// Create object and start session
$GLOBALS['MYSQL_SESSION'] = new MySQL_Session_Handler($db, 'sessions');

//*
$_SESSION['asdf1'] = 'asdf';
$_SESSION['asdf2'] = 'asdf';
$_SESSION['asdf3'] = 'asdf';
$_SESSION['asdf4'] = 'asdf';
$_SESSION['asdf5'] = 'Array ( [asdf] => asdf [asdf1] => asdf [asdf2] => asdf [asdf3] => asdf [asdf4] => asdf [asdf5] => asdfa )';
//*/

echo '<pre>';

echo 'Your session:', PHP_EOL, print_r($_SESSION, TRUE);

// Do queries and stuff with same connection ...
echo 'Your session id db:', PHP_EOL, print_r($db->fetchQueryToArray('SELECT * FROM `sessions`;'), TRUE);

// Hey, check your database ;-)