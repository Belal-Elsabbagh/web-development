<?php
/*** die() statement ***/
die("This is the error meesage");
die();

/*** custom errors and error triggers ***/
function customError($lvl, $msg, $file, $line_number, $error_context)
{

}

set_error_handler("customError");

/*** error reporting ***/
trigger_error
(
  $error_message,
  $error_level, 
);