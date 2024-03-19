<?php
/*
class & object
class = the Blueprint that u can create objects from.
object = the instance of the class
[->] = object operator
[$this] = self operator referring to the (object) itself
[::] = self operator referring to the (class) itself Scope Resolution Operator.[Paamayim Nekudotayim]= Double colon operator
example Apple
class  = Apple Blueprint design
object = iphones that chaina made
Application = Apple store

example Web Application registration
class  = code to add a new Member
object = new Members that be added
Application = Web Application registration

self = refer to the current class
it is also refer to the static members
not use ($) because it not represent a class variable but it  represents the class construction

$this = refer to the current object
access the non static members
use ($) because it represent a variable
*/
// class Apple
// {
//     public $ram = '1GB';
//     public $inch = '4.7';
//     public $space = '64GB';
//     public $cpu = 'A9';
//     public $os = 'IOS';
//     public $name = 'iphone';
//     public $color = 'white';
//     public $ownername ="Mark";
//      //constants 
//     const OWNERNAME = "5";
//     public function clickable() {
//         echo "clickable on $this->name<br>";
//     }
//     public function getSpecification() {
//         echo "your ram is:" .$this->ram."<br>";
//     }
//     public function set_ownername($name){
//         if(strlen($name)<self::OWNERNAME){
//             echo "ownername must be at least ".self::OWNERNAME."<br>";
//         }else{
//             $this->ownername = $name;
//         }
//     }

// }
// /*************** */
// $iphone6plus = new Apple();
// $iphone6plus->ram ="4GB";
// $iphone6plus->inch ="5.5";
// $iphone6plus->space ="128GB";
// $iphone6plus->cpu ="A10";
// $iphone6plus->os ="IOS";
// $iphone6plus->name ="iphone6plus";
// $iphone6plus->color ="silver";
// $iphone6plus->set_ownername("Radwa elzero");
// $iphone6plus->clickable();
// $iphone6plus->getSpecification();
// echo Apple::OWNERNAME."<br>";//5
// echo $iphone6plus::OWNERNAME;//5
// echo "<pre>";
// print_r($iphone6plus);
// echo "</pre>";
// echo ("\******************************/"."<br>");
// // $iphone_12_plus = new Apple();
// // $iphone_12_plus->ram ="6GB";
// // $iphone_12_plus->inch ="6.1";
// // $iphone_12_plus->space ="256GB";
// // $iphone_12_plus->cpu ="A14";
// // $iphone_12_plus->os ="IOS";
// // $iphone_12_plus->name ="iphone12plus";
// // $iphone_12_plus->color ="black";
// // $iphone_12_plus->set_ownername("Mohamed");
// // echo "<pre>";
// // print_r($iphone_12_plus);
// // echo "</pre>";
// echo ("\******************************/"."<br>");
// $iphone_X = new Apple();
// echo "<pre>";
// print_r($iphone_X);
// echo "</pre>";
/*************************************** */
/*************************************** */
// Blog system
// class = add posts articles news info.
// object = (posts-article-news-info) that be added.
// Application = Blog system
// class Blog
// {
//     public $title;
//     public $description;
//     public $author;
// }

// $blog = new Blog();
// echo "<pre>";
// print_r($blog);
// echo "</pre>";
/********************** */
/***********Encapsulation**************** */
// class Apple
// {
//     public $ram ;
//     public $inch ;
//     public $space;
//     public $cpu;
//     public $os;
//     public $name;
//     public $color;
//     public $ownername;
//     //Encapsulation
//     private $lock;
//     public function change_spec($r,$i,$s,$c,$o,$n,$col){
//         $this->ram = $r;
//         $this->inch = $i;
//         $this->space = $s;
//         $this->cpu = $c;
//         $this->os = $o;
//         $this->name = $n;
//         $this->color = $col;
//     }
//     public function changelock($lo) {
//         $this->lock = sha1($lo);
//     }

// }
/***************************/
// $iphone6plus = new Apple();
// $iphone6plus->change_spec("14GB","5.5","128GB","A10","IOS","iphone6plus","silver");
// // echo $iphone6plus->ram; 
// echo $iphone6plus->changelock("Mo123456");//[lock:Apple:private] =54f521239b26adaa207cce34e4b0d381b45e0b92
// // $iphone6plus->lock = "123456";
// // echo $iphone6plus->lock;
// echo "<pre>";
// print_r($iphone6plus);
// echo "</pre>";
// echo ("\******************************/"."<br>");
/*****************inheritance********************** */
// final class Apple //Fatal error: Class Sony cannot extend final class Apple 
// class Apple
// {
//     public $ram ,$inch,$space,$cpu,$os,$name,$color,$ownername = "Radwa",$price = "400$";
//     public function change_spec($r,$i,$s,$c,$o,$n,$col){
//         $this->ram = $r;
//         $this->inch = $i;
//         $this->space = $s;
//         $this->cpu = $c;
//         $this->os = $o;
//         $this->name = $n;
//         $this->color = $col;

//     }
//     // final public function sayhello($n){//Cannot override final method Apple::sayhello()
//         public function sayhello($n){
//         $this->name = $n;
//         echo "hello ya $n"; 
//     }

// }
// $iphone6plus = new Apple();
// $iphone6plus->change_spec("14GB","5.5","128GB","A10","IOS","iphone6plus","silver");
// $iphone6plus->sayhello("iphone");
// echo "<pre>";
// print_r($iphone6plus);
// echo "</pre>";
// /***********/
// class Sony extends Apple
// {
//     public $camera;
//     public $price = "600$";
//     public function sayhello($n){
//         $this->name = $n;
//         echo "hi $n"; 
//     }
// }
// $sony = new Sony();
// $sony ->change_spec("50GB","7.5","256GB","A12","IOS","sony","black");
// $sony ->sayhello("sony ");
// echo "<pre>";
// print_r($sony );
// echo "</pre>";
/****************abstraction */
/*
class abstraction can not be instantiated[can not be created object from it].
it is make it as a blueprint for other classes to inherit(properties and methods) from it 
معايير الجوده
can have properties and methods
can have abstract methods and (methods defined).
 */
// abstract class Make_device{
//     // public $ram ,$price = "400$";
//     // public function Sayhello($r){
//     //     $this->ram = $r;
//     //     echo "hello ya $r"."<br>";  
//     // }
//     abstract protected function sayBye($name);
//     abstract protected function testperformance();
//     abstract protected function verify_owner($owner);

// }

// class Iphone extends Make_device
// {
//     public $ownername;
//     public function sayBye($n){
//         echo "bye ".$n."<br>";
//     }
//     public function testperformance(){
//         echo "testperformance"."<br>";
//     }
//     public function verify_owner($own){
//         echo "verify_owner".$own."<br>";
//         $this->ownername = $own;
// }
// }
// $iphone6plus = new Iphone();
// // $iphone6plus->Sayhello("14GB");
// // $iphone6plus->sayBye();
// $iphone6plus->sayBye("iphone6plus");
// $iphone6plus->testperformance();
// $iphone6plus->verify_owner("mo");
// echo "<pre>"; print_r($iphone6plus); echo "</pre>";


// /** */
// class Ipad extends Make_device
// {
//     public $ownername;
//     public function sayBye($na){
//         echo "bye2 ".$na."<br>";
//     }
//     public function testperformance(){
//         echo "testperformance2"."<br>";
//     }
//     public function verify_owner($own){
//         echo "verify_owner2".$own."<br>";
//         $this->ownername = $own;
//     }
// }
// $ipadobj = new Ipad();
// $ipadobj->sayBye("ipad");
// $ipadobj->testperformance();
// $ipadobj->verify_owner("ali");
// echo "<pre>";print_r($ipadobj);echo "</pre>";
/*******************polymorphism */
// interface Mobile{
//     public function press_Home();
// }
// class Iphone{
//     public $name;
//     public function press_Home(){
//         echo "u will open all apps";
//     }
// }

// class Sony{
//     public $name;
//     public function press_Home(){
//         echo "u close all apps";
//     }
// }
// $iphone = new Iphone();
// $iphone->press_Home();
// echo "<pre>";print_r($iphone);echo "</pre>";
// $sony = new Sony();
// $sony->press_Home();
// echo "<pre>";print_r($sony);echo "</pre>";


// interface DBConnect{
//     public function getUsers();
//     public function getArticles();
//     public function ShowStatus();

// }
// class MySQL implements DBConnect{
//     public function getUsers(){
//         echo "get user from MySQL";
//     }
//     public function getArticles(){
//         echo "get article from MySQL";
//     }
//     public function ShowStatus(){
//         echo "show status from MySQL";
//     }
// }
// class PostgreSQL implements DBConnect{
//     public function getUsers(){
//         echo "get user from PostgreSQL";
//     }
//     public function getArticles(){
//         echo "get article from PostgreSQL";
//     }
//     public function ShowStatus(){
//         echo "show status from PostgreSQL";
//     }
// }
// class SQLite implements DBConnect{
//     public function getUsers(){
//         echo "get user from SQLite";
//     }
//     public function getArticles(){
//         echo "get article from SQLite";
//     }
//     public function ShowStatus(){
//         echo "show status from SQLite";
//     }
// }
// class Oracle implements DBConnect{
//     public function getUsers(){
//         echo "get user from Oracle";
//     }
//     public function getArticles(){
//         echo "get article from Oracle";
//     }
//     public function ShowStatus(){
//         echo "show status from Oracle";
//     }
// }
// $mysqldb = new MySQL();
// $mysqldb->getUsers();
// $mysqldb->getArticles();
// $mysqldb->ShowStatus();
// echo "<pre>";print_r($mysqldb);echo "</pre>";
/***********Magic Methods ******************/
//__construct called when object is created and can be inherited
//__destruct called when object is destroyed and can be inherited
// class Iphone{
//     public $name;
//     public $ram;
    // public function press_Home($n){
    //     echo "u will open all apps ya"." ".$n."<br>";
    // }

    // public function __construct(){
    //     $this->name = "iphone";
    //     $this->ram = "4GB";
    //     echo "first constructor"."<br>";
    // }
    // public function __construct($na,$ra){
    //     $this->name = $na;
    //     $this->ram = $ra;
    //     echo "your name is"." ".$na."  "."<br>"."and your ram is"." ".$ra."<br>";
    // }
//     public function __call($name, $arguments)
//     {
//         echo "The Method [$name] does not exist or Accessible"."<br>";
//         foreach ($arguments as $key => $value) {
//             echo "$key => $value"."<br>";
//         }
//     }
// }   

// $phone = new Iphone();
// $phone->press_Home("Ali");
// $phone = new Iphone("iphone6+","5GB");
// $phone = new Iphone();
// $phone->sayHello();
// $phone->Welcome("ali","5GB");
// echo "<pre>";print_r($phone);echo "</pre>";
// class Sony extends Iphone{
// }
// $sony = new Sony();
// $sony = new Sony("sony","4GB");
// $sony = new Sony();
// $sony ->sayHello();
// $sony ->Welcome("MO","4GB");
// echo "<pre>";print_r($sony);echo "</pre>";

/*********************************/
/***set and get */
// class Iphone{
//     public $name;
//     public $ram;
//     private $NOTFOUND;
//     // public function __get($prop){
//     //     echo 'The Property ['. $prop.'] is not defined or accessible <br>';

//     // }
//     public function __set($prop, $value){
//         echo 'The Property ['. $prop.'] is not defined or accessible <br>';
//         echo ' and u cannot assign the value ['.$value.'] to it <br>';
//     }
// }
// $phone = new Iphone();
// // echo $phone->color;//The Property [color] is not defined or accessible
// echo $phone->color ="red";
// // بتهندل انك  تعمل بروبيرتي  غير جديده  موجوده او حاجه جديده
// // $phone->color ="red";//The Property [color] is not defined or accessible and u cannot assign the value [red] to it
// // echo $phone->color;//Cannot access private property Iphone::$color
// $phone->NOTFOUND ="testing";
// echo "<pre>";print_r($phone);echo "</pre>";

/***********clone******/
//shallow copy works with data types only
//deep copy works with objects
// class Iphone{
//     public $name;
//     public $ram;
//     public function __construct($n,$r){
//         $this->name = $n;
//         $this->ram = $r;
//     }
//     // public function __clone(){
//     //     echo "clone";
//     // }
// }
// $phone = new Iphone("oppo","4GB");
// // $copy= $phone;//copy by reference
// // $phone->name = "samsong";
// // $copy->ram = "10GB";
// // echo "<pre>";print_r($phone);echo "</pre>";//samsong 10GB
// // echo "<pre>";print_r($copy);echo "</pre>";//samsong 10GB
// $copy= clone $phone;//copy by value
// $phone->name = "Hawawy";
// $phone->ram = "10GB";
// echo "<pre>";print_r($phone);echo "</pre>";//Hawawy 10GB
// // echo "<pre>";print_r($copy);echo "</pre>";//oppo 10GB
// $copy->ram = "200GB";
// $copy->name = "1K";
// echo "<pre>";print_r($copy);echo "</pre>";//1K 200GB
/***********clone */
//deep copy works with objects
// class Iphone{
//     public $name;
//     public $ram;
//     public function __construct($n,$r){
//         $this->name = $n;
//         $this->ram = $r;
//     }
//     public function __clone(){
//         $this->name = clone $this->name;
//         $this->ram = clone $this->ram;
        
//     }
// }
// $ph = new Iphone("samsung","4GB");
// echo"<pre>";print_r($ph);echo "</pre>";
// class MyClass extends Iphone{
//     public $a;
//     public $b;
//         public function __construct($a,$b){ 
//         $this->a = $a;
//         $this->b = $b;
//     }
// }
// $obj1 = new MyClass("a1","b1");
// $obj2 = clone $obj1;//by value
// $obj2->a = "a2";
// $obj2->b = "b2";
// $obj1->a = "a3";
// $obj1->b = "b3";
// echo "<pre>";print_r($obj1);echo "</pre>";
// echo "<pre>";print_r($obj2);echo "</pre>";

/**********************static */
// class Iphone{
//     // public $name;
//     // public $ram;
//     // public function sayHello(){
//     //     echo "hello";
//     // }

//     public static $name;
//     // public static $ram = "4GB";
//     public  $ram = "4GB";
//     public static function sayHello(){
//         echo "hello".'<br>';
//     }
// }
// // $obj1 = new Iphone();
// // $obj1->sayHello();//hello

// echo Iphone::sayHello();//hello
// echo Iphone::$name ="ali".'<br>';//ali

// $obj1 = new Iphone();
// // echo $obj1 ->ram;//Notice: Accessing static property Iphone::$ram as non static
// echo $obj1 ->ram .'<br>';//4GB
// $obj1 ->sayHello();//hello
/*****************Methods chaining */
// class Iphone{
//     public $name;
//     public $ram;
//     public function press_Power($clk){
//         echo "press power ".$clk.'<br>';
//         return $this;
//     }
//     public function press_Home($on){
//         echo "press home ".$on.'<br>';
//         return $this;
//     }
//     public function sayHello($name){
//         echo "hello ".$name.'<br>';
//         return $this;
//     }
// }
// $obj1 = new Iphone();
// $obj1->press_Home("off")->press_Power("on")->sayHello("MO");
// echo "<pre>";print_r($obj1);echo "</pre>";
/**************traits */
// trait FingerPrint{
//     public function verify_owner($own){
//         echo "verify_owner throw finger print".$own."<br>";
//         return $this;
//     }
// }
// trait ThreeDTouch{
//     public function Touch3D($own){
//         echo "verify_owner throw 3D touch".$own."<br>";
//         return $this;
//     }
// }
// trait FaceIDetection{
//     public function TouchFaceID($own){
//         echo "verify_owner throw FaceIDetection".$own."<br>";
//         return $this;
//     }
// }
// trait Allfeature{
//     use FingerPrint,ThreeDTouch,FaceIDetection;
// }
// class Iphone {
//     use FingerPrint,ThreeDTouch,FaceIDetection;
//     public $name;
//     public $ram;
//     public function sayHello($n){
//         $this->name = $n;
//         echo "hello ".$n.'<br>';
//     }
// }
// $iphone = new Iphone();
// $iphone->verify_owner("MO")->Touch3D("MO")->TouchFaceID("MO");
// $iphone->sayHello("Iphone");
// echo "<pre>";print_r($iphone);echo "</pre>";

// class Nokia{
//     use Allfeature;
//     public $cam;
//     public $name;
//     public $screen;
//     public function sayHello($n){
//         $this->name = $n;
//         echo "hello ".$n.'<br>';
//     }
// }
// $nokia = new Nokia();
// $nokia->verify_owner("MO")->Touch3D("MO")->TouchFaceID("MO");
// $nokia->sayHello("Nokia");
// echo "<pre>";print_r($nokia);echo "</pre>";
// class samsung{
//     use Allfeature;
//     public $touch;
//     public $latch;
//     public $name;
//     public function sayHello($n){
//         $this->name = $n;
//         echo "hello ".$n.'<br>';
//     }
// }
// $samsung = new samsung();
// $samsung->sayHello("samsung");
// $samsung->verify_owner("MO")->Touch3D("MO")->TouchFaceID("MO");
// echo "<pre>";print_r($samsung);echo "</pre>";

// class Lg{
//     use FingerPrint,ThreeDTouch,FaceIDetection;
//     public $battery;
//     public $warranty;
//     public $name;
//     public function sayHello($n){
//         $this->name = $n;
//         echo "hello ".$n.'<br>';
//     }
// }

// $lg = new Lg();
// $lg->verify_owner("MO")->Touch3D("MO")->TouchFaceID("MO");
// $lg->sayHello("lg");
// echo "<pre>";print_r($lg);echo "</pre>";

/********** */
// trait FingerPrint{
//     const NAME = "Iphone";
//     public $total_ram ;
//     public function verify_owner($own){
//         echo "verify_owner throw finger print ".$own."<br>";
//         return $this;
//     }
//     public function sayHello(){
//         echo "hello from trait ".'<br>';
//     }
// }
// class Device{
//     public function sayHello(){
//         echo "hello from device class  ".'<br>';
//     }
// }
// class Iphone extends Device{
//     use FingerPrint;
//     public $name;
//     public $ram;
// }
// $iphone = new Iphone();
// $iphone->verify_owner("MO")->sayHello();
// echo "<pre>";print_r($iphone);echo "</pre>";

/**************** */
// trait FeatureOne{
//     public function sayHello(){
//         echo "hello from trait one ".'<br>';
//     }
// }
// trait FeatureTwo{
//     public function sayHello(){
//         echo "hello from trait two ".'<br>';
//     }
// }
// class Iphone{
//     use FeatureOne,FeatureTwo{
//         // traitName::methodName insteadof traitName2
//         FeatureTwo::sayHello insteadof FeatureOne;
//         FeatureOne::sayHello as MYhello_one;
//     }
//     public $name;
//     public $ram;
// }
// $iphone = new Iphone();
// $iphone->sayHello();
// $iphone->MYhello_one();
// echo "<pre>";print_r($iphone);echo "</pre>";
/***************Namespace */
// require"Apple.php";
// require"Samsong.php";
// require"Sony.php";
// // $iphone = new Apple\CreatePhone();
// // $iphone->sayHello();
// // echo "<pre>";print_r($iphone);echo "</pre>";
// $iphone= new Samsong\HW\Part1\CreatePhone();
// $iphone->sayHello();
// echo "<pre>";print_r($iphone);echo "</pre>";

// $CreateHWpart2= new Samsong\HW\Part2\CreateHWpart2();
// $CreateHWpart2->sayHello();
// echo "<pre>";print_r($CreateHWpart2);echo "</pre>";

/**************Autoload classes */
spl_autoload_register(function($class){
    include 'classes/' .$class. '.class.php' ; 
});

$var1 = new Testing1();
echo "<pre>";print_r($var1);echo "</pre>";