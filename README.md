PHP_MySQL_Session_Handler
=========================

Safely save and retrieve PHP session data in MySQL.

This class: 
- Save and retrieve PHP session data in MySQL.
- Registers its functions as PHP session handle so the current PHP user session is saved and retrieved from a MySQL database table.
- Create the necessary database table to save the session data.
- Session data is encrypted and decrypted by the class with a given key.
- Contains a built-in procedure to prevent session hijacking.
