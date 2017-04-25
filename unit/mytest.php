<?php
namespace mypack {
    
    class mytest {
        //put your code here
        public function __construct(){
            echo "execuxted from Mypack";
        }
    }

}

namespace mypacktwo {
    
     class mytest {
        public function __construct(){
            echo "execuxted from Mypack Two...";
        }
        //put your code here
    }

    
    $obj = new \mypack\mytest();
    $obj = new \mypacktwo\mytest();

function parse(bool ... $var):int  {
    print_r($var);
}

//parse("222",232,3.4,555,"3333",'0');

function parse1(callable $callback){
    $callback();

}
$func1 = function(){echo "I am inside callbck function ";};
parse1($func1 );
parse1(function(){echo "I am inside callbck function ";});


echo 1<=>2;
echo "<br>";

echo 11<=>2;
echo "<br>";

echo 1<=>1;


const PERSON = array(1,2,3);

define("PERSON1",array("abc"));
print_R (PERSON1);
}
