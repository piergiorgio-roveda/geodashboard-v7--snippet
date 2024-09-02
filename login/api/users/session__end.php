<?php

function _init($ds){

    session_start(); // Start the session or continue the existing one

    // Clear session variables
    session_unset();

    // Destroy the session
    session_destroy();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    $o['message'] = 'Session session_destroyed'; 

  return $o;

}
?>