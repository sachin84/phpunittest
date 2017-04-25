<?php

use \Mockery as m;

//use PHPUnit\Framework\TestCase;
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."../vendor/autoload.php";

class MymainClassTest extends PHPUnit_Framework_TestCase {
    /*
     * @Test
     */

    public function testInsertInLog() {
        $mymain = $this->getMockBuilder('MymainClass')->getMock();
        $mymain->expects($this->any())
                ->method('insertInLog')
                ->will($this->returnValue(59));

        $output = $mymain->insertInLog(3, 3);
        //print_r('ldchdjkjkckcsdkb');
        echo $output;
    }

    public function testInsertInLogMockery() {
        $mymain = m::mock('MymainClass');
        $mymain->shouldReceive('insertInLog')->times(2)->andReturn(10, 12, 14);

        $output = $mymain->insertInLog(3, 3);
        print_r($output);

        print_r($output);
        echo "-----";

        print_r($mymain->insertInLog(3, 3));
        echo "-----";

        print_r($mymain->insertInLog(3, 3));
        
    }

    public function getLogFileTest($var1) {
        
    }

}

?>