<?php
/*** Setting a cookie ***/
  setcookie
  (
    $cookie_name, 
    $cookie_value,
    // Optional Parameters: 
    $expire_time, // time till the cookie expires (default: till the browser closes) 
    $cookie_file_path, // determines which directory and subdirectories where the cookie will be available (default: /)
    $domain, // determines the domain or sub-domain where the cookie will be available (default:)
    $is_secure, // whether or not it needs https to send (default: false)
    $is_HTTP_only // determines whether or not non-http scripts can access the cookie (default: false)
  );

  //Example:
    setcookie('location', 'USA', time() + 60 * 60 * 24 * 7, '/');


/*** Getting a cookie ***/
  if(isset($_COOKIE['location'])) 
  {
    $location = $_COOKIE['location'];
  }

/*** Destroying a cookie ***/
  /*
    1. Call setcookie with the same parameters.
    2. Set time in the past.
    3. There is no step 3.
  */