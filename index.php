<?php 

/*
   cookies in browther
*/

// create cookies

// $expires = time() + 60 * 60 * 24 * 30;
// setcookie('test','this is sample cookie',$expires,'/');


// //read cookies
// if(isset($_COOKIE['test'])){
//    echo $_COOKIE['test'];
// }else{
//    echo 'cookie not set';
// }

// // session start
// session_start(); 

// //create 

// $_SESSION['test'] = 'This is session variable';


// // array_filter functions 

// $array= [
//    'a'=> 1,
//    'b'=>2,
//    'c'=> 3,
//    'd'=>4,
// ];

// $filteredArray = array_filter($array, function($level){
//    return $level != 2;
// }, mode: 0);

// print_r($filteredArray);

// $array = ['alexs','john','mike','tomas'];
// $arrays = ['deani','joh','tom','desu'];

// $merged = array_merge($array,$arrays);

// print_r($merged);

// $newArray = [];
// foreach($array as $value){
//    $newArray[] = '#'.$value;
// }

// print_r($newArray);

// class practice

class Car{
   public function driving(){
      echo "I can drive ";
   }
}

class ElectricCar extends Car{
   public function ecpd(){
      echo "I am Eletric  car power contronler";
   }
}

class Tesla extends ElectricCar{
   public function autoDrive(){
      echo " I am tesla auto drive system";
   }
}

$tesla = new Tesla();
$tesla->driving();
$tesla->ecpd();
$tesla->autoDrive();