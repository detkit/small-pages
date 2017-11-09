<?php
session_start();
echo "Logout Successfully ";
if(session_destroy()) {   // function that Destroys Session
	header ( "Location: login.php" );
}