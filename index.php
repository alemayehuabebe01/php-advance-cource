<?php 

 
// $book = new Movies\Book();
// $book->read();

// $bibleBook = new Bible\Book();
// $bibleBook->read();

// class Human { 
//    private $name;
//    private $age;

//    public function setName($name){
//       $this->name = ucfirst($name);
//       return $this;
//    }

//    public function setAg($age){
//       $this->age = $age;
//       return $this;
//    }

//    public function introduc()
//    {
//       return "My name is {$this->name} and I am {$this->age} years old.";
//    }
// }

// $alex = new Human();
// // $alex->setName(name:'Alemayehu Abebe');
// // $alex->setAg(age: 25);

// $alex->setName(name:'Alex')->setAg(age:23)->introduc();

// display the name and age of the human object

//echo $alex->introduc();

 

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

// class Car{
//    public function driving(){
//       echo "I can drive ";
//    }
// }

// class ElectricCar extends Car{
//    public function ecpd(){
//       echo "I am Eletric  car power contronler";
//    }
// }

// class Tesla extends ElectricCar{
//    public function autoDrive(){
//       echo " I am tesla auto drive system";
//    }
// }

// $tesla = new Tesla();
// $tesla->driving();
// $tesla->ecpd();
// $tesla->autoDrive();

// Namespace 

// interface Human{
//    public function sayName(string $name);
//    public function getAge(int $yearBorn);

// }


// class Person implements Human{
//    public function sayName(string $name){
//       echo "My name is " . $name;
//    }

//     public function getAge(int $yearBorn){
//        echo "i am ". (date(format:'Y')-$yearBorn) . " Years Old";
//     }
// }

// $person = new Person();
// $person->sayName("Alemayehu Abebe");
// $person->getAge(1992);

//Constant

// class Person{
//    const Name = "Alemayehu Abebe";
//    const Age = 25;
// }

// echo Person::Name . "\n";

// Abstract class

// defining abstract class

// abstract class Person{
//    private $name;

//    public function sayHello(){
//       echo "Hello, I am";
//    }

//    abstract protected function nationalty();
// }

// class Alexs extends Person{
//    public function nationalty(){
//       echo " i am Ethioipian";
//    }
// }


// Trait 

//define 

 

// class Person{
//     public function __construct(public string $name = 'Alexs', public int $age = 25){
//        if($name == 'alexs'){
//           echo "Hello Agin";
//        }
//     }

//     public function introduce(){
//        return "My name is {$this->name} and I am {$this->age} years old";
//     }
// }

// $person = new Person(name: 'Alemayehu Abebe', age: 25);
// echo $person->introduce();

#############

//regular expression

//echo $_SERVER['REQUEST_URI'];
// require_once 'Router.php';

// Router::handle( method: 'GET', path: '/contact',filename:'./contact.php');
// Router::handle( method: 'GET', path: '/pricing',filename:'./pricing.php');

// echo "index page file";

// connect to database

//$pdo = new PDO(dsn:'mysql:host=localhost;dbname=phpcase',username:"root",password:'');
//Insert data into database

// $count = $pdo->exec(statement:'INSERT INTO info (name) VALUES ("Tomas")');

// $pdo->beginTransaction();
// $pdo->exec(statement:'INSERT INTO info (name) VALUES ("Php")');
// $pdo->exec(statement:'INSERT INTO info (name) VALUES ("CSS")');
// $pdo->exec(statement:'INSERT INTO info (name) VALUES ("CMS")');
// $pdo->exec(statement:'INSERT INTO info (name) VALUES ("JAVA")');
// $pdo->exec(statement:'INSERT INTO info (name) VALUES ("PhYTON")');
// $pdo->commit();

// $statement = $pdo->query("SELECT * FROM info");

// $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// //PRINT ROWS

// foreach($rows as $row){
//    echo $row['id']." - " . $row['name']. PHP_EOL;
// }

//RUN COMANDS
 

// exec('whoami',$output,$resultCode);

// echo $resultCode . PHP_EOL;
// echo $output[0];

// exec("python ./hello.py", $output, $resultCode);
// var_dump($output);
// echo  $resultCode;

// Curl

// $curl = curl_init();
// curl_setopt_array(
//    $curl,[
//       CURLOPT_URL => 'https://example.com',
//       CURLOPT_TIMEOUT=> 30,
//       CURLOPT_CUSTOMREQUEST => 'GET',
//       CURLOPT_HEADER => [],
      
//    ]
// );
// $responce = curl_exec($curl );
// curl_close($curl );

// echo $responce;


// $curl = curl_init();
// $requestType = 'GET';
// $url = 'https://www.imdb.com/chart/boxoffice/';
// curl_setopt_array($curl,[
//       CURLOPT_URL => $url,
//       CURLOPT_CUSTOMREQUEST => $requestType,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_RETURNTRANSFER => true,
// ]);

// $response = curl_exec($curl);
// curl_close($curl);
// libxml_use_internal_errors(true);
// $dom = new DOMDocument();
// $dom->loadHTML($response);
// $xpath = new DOMXPath($dom);

// $weekendTitleNode = $xpath->query('//*[@id="boxoffice"]/h4');

// // Check if any nodes were found
// if ($weekendTitleNode->length > 0) {
//     $firstItem = $weekendTitleNode->item(0);
//     echo htmlspecialchars($firstItem->nodeValue);
// } else {
//     echo "No box office title found. The page structure may have changed.";
    
//     // Debugging: Output the HTML to see current structure
//     // file_put_contents('debug.html', $response);
// }

// $firtItem = $weekendTitleNode->item(0);

// echo $firtItem->nodeValue;


// Execute Python script and capture output
$command = 'python hello.py 2>&1';  // 2>&1 redirects stderr to stdout
exec($command, $output, $resultCode);

// Display results
echo "Output:\n";
print_r($output);  // Better for arrays than var_dump
echo "\nReturn code: " . $resultCode . "\n";
