//1
<?php
// checking whether file exists or not
echo file_exists('/user01/work/gfg.txt'); //Output: 1

?>

//2 {{ string functions }}
<?php

// 1) str_replace
// Replaces some characters in a string (case-sensitive)
$search = "world";
$subject = "Hello world!";
$replace = "Mustafa";
echo str_replace($search , $replace, $subject); //Output: Hello Mustafa

// 2) substr
//used to extract a part of the given string and return it.
echo substr("Hello world", 6); //output: world

// 3)  strlen
//Returns the length of a string
echo strlen("Hello");//output: 5

// 4) implode
//Join array elements with a string:
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr);
//output: Hello World! Beautiful Day!

//5) trim
//Remove characters from both sides of a string
//Remove whitespaces from both sides of a string:
$str = " Hello World! ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);
?>

//3
<?php
//used to return the directory name of a given path
echo dirname("c:/testweb/home.php") . "<br />";
echo dirname("c:/testweb/home.php", 2) . "<br />";
echo dirname("/testweb/home.php");
//output:
// c:/testweb
// c:
// /testweb
?>

//4 {Array functions}
<?php
// 1) array_chunk
// Splits an array into chunks of arrays
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
/* output:
Array (
    [0] => Array ( [0] => Volvo [1] => BMW )
    [1] => Array ( [0] => Toyota [1] => Honda )
    [2] => Array ( [0] => Mercedes [1] => Opel )
)
*/
// 2) array_diff
//Compare arrays, and returns the differences (compare values only)
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
/* output:
 Array ( [d] => yellow )
 */

// 3) array_merge
//Merges one or more arrays into one array
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
//Array ( [0] => red [1] => green [2] => blue [3] => yellow )

// 4) array_map
//Sends each value of an array to a user-made function, which returns new values
function myfunction($v)
{
    return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
//Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// 5)
//Filters the values of an array using a callback function
function test_odd($var)
{
    return($var & 1);
}

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
//Array ( [0] => 1 [1] => 3 [3] => 3 )


// 6) array_slice();
//Returns selected parts of an array
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
// Array ( [0] => blue [1] => yellow [2] => brown )


// 7 ) count()
//	Returns the number of elements in an array
$cars=array("Volvo","BMW","Toyota");
echo count($cars); // 3

?>

// 5
<?php
//Break a string into an array:
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
// Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )
?>

//6
<?php
//Check whether a variable is empty. Also check whether the variable is set/declared:
$a = 0;
// True because $a is set
if (isset($a)) {
    echo "Variable 'a' is set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
    echo "Variable 'b' is set.";
}
?>

//7 {{call-back}}
<?php
// 1) call_user_func

//is used to call the callback given by the first parameter and passes the remaining parameters as argument.
// It is used to call the user-defined functions.
function func($value)
{
    echo "This is $value function.\n";
}

call_user_func('func', "php");

//2) call_user_func_array
function foobar($arg, $arg2)
{
    echo __FUNCTION__, " got $arg and $arg2\n";
}

class foo
{
    function bar($arg, $arg2)
    {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}


// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));


?>
//8
<?php
// 1) json_decode()
//Decodes a JSON string
$jsonobj = '{"Mustafa":19,"Fares":20}';

var_dump(json_decode($jsonobj));
/*
 object(stdClass)#1 (3)
    {
         ["Mustafa"]=> int(19)
        ["Fares"]=> int(20)
    }
 */

// 2) json_encode();
//Encode a value to JSON format
$age = array("Mustafa"=>19, "Fares"=>20);
echo json_encode($age);
/*
    {"Mustafa":19,"Fares":20}
 */
