<?php 
	session_start();
	if (isset($_SESSION['user_id']) && (time() - $_SESSION['user_id'] > 1800)) {
	    // last request was more than 30 minutes ago
	    session_unset();     // unset $_SESSION variable for the run-time 
	    session_destroy();   // destroy session data in storage
	    echo '<script language="javascript">window.location="../index.php";</script>';
	}
?>