<?php 
// Common settings 
define('CURRENCY', 'USD'); 
define('CURRENCY_SYMBOL', '$'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');  
define('DB_NAME', 'conceptpalace2025'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
?>