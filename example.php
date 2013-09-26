<?php 

/** PHP MySQL Session Handler Example
 *	
 *	PHP version required (4 >= 4.0.2, 5)
 *	
 */

include "MySQL_wrapper.class.php";
include "MySQL_Session_Handler.class.php";

/** MySQL database stored session
 * @param string 	$server 	- MySQL Host name or ( host:port )
 * @param string 	$username 	- MySQL User
 * @param string 	$password 	- MySQL Password
 * @param string 	$db		 	- MySQL Database
 * @param string 	$table 		- MySQL Table
 * @param integer 	$lifeTime 	- Session lifetime
 * @param bool	 	$encrypt 	- Encrypt session data 
 * 
 * void mysql_session_start(string $host, string $username, string $password, string $db [, $table = NULL [, $lifeTime = 0 [, $encrypt = TRUE]]])
 *
 */
 
mysql_session_start('localhost', 'root', '', 'sessiondb');

//*
$_SESSION['asdf1'] = 'asdf';
$_SESSION['asdf2'] = 'asdf';
$_SESSION['asdf3'] = 'asdf';
$_SESSION['asdf4'] = 'asdf';
$_SESSION['asdf5'] = 'Array ( [asdf] => asdf [asdf1] => asdf [asdf2] => asdf [asdf3] => asdf [asdf4] => asdf [asdf5] => asdfa )';
//*/

print_r($_SESSION);

// Hey, check your database ;-)