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

//create 

$_SESSION['test'] = 'This is session variable';


// array_filter functions 

$array= [
   'a'=> 1,
   'b'=>2,
   'c'=> 3,
   'd'=>4,
];

$filteredArray = array_filter($array, function($level){
   return $level == 2;
}, mode: 0);

print_r($filteredArray);


