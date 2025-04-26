<?php  

class Router
{
    public static function handle($method = 'GET', $path = '/' , $filename = ''){
         //print_r($_SERVER);

         $currentMethod = $_SERVER['REQUEST_METHOD'];
         $currentUri = $_SERVER['REQUEST_URI'];

         if($currentMethod != $method){
            return http_response_code(405);
         } 

         $root = '/php';
         $pattern = '#^'.$path.'$#siD';

         if(preg_match($pattern, $currentUri)){
            require_once $filename;
         }


         return false;
    }
}