<?php 

/*
   cookies in browther
*/

// create cookies

$expires = time() + 60 * 60 * 24 * 30;
setcookie('test','this is sample cookie',$expires,'/');


//read cookies
if(isset($_COOKIE['test'])){
   echo $_COOKIE['test'];
}else{
   echo 'cookie not set';
}

// session start
session_start();



