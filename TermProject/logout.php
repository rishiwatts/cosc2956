<?php 
require_once './includes/session_start.php'; ?>
<?php
 session_unset(); 
 session_destroy(); 
 
 if (ini_get('session.use_cookies')) {
     $params = session_get_cookie_params();
     setcookie(session_name(), '', time() - 3600,
         $params['path'], $params['domain'],
         $params['secure'], $params['httponly']
     );
 }

 header("Location: index.php");
?>
