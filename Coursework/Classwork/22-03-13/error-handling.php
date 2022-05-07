<?php
/*** die() statement ***/
  die("This is the error meesage");

/*** custom errors and error triggers ***/
  function customError($lvl, $msg, $file, $line_number, $error_context)
  {
    $lvl;
    $msg;
    $file;
    $line_number; 
    $error_context;
  }

  set_error_handler("customError");

/*** error reporting ***/
  trigger_error
  (
    $error_message,
    $error_level
  );

/*** error logging ***/
  error_log
  (
    $error_message, // THe message to be sent
    $error_level, // The error level
    $destination, // Where the error will be recorded
    $additional_headers
  );