<?php

class MockUUIDTest extends PHPUnit_Framework_TestCase {

    public function testgenerateSMSCodeValidWithProvider() {
       
        $observer = $this->getMock('UUIDGenerator', array('genrateUUID'));        
        $observer->expects($this->any())->method('genrateUUID')->will($this->returnValue('K12DDH553'));
        $key = 553;
        $pattern = "/^[a-z A-Z 0-9]{6}" . $key . "$/";
        $uuid_sms = $observer->genrateUUID();
        echo $uuid_sms;

        $this->assertRegExp($pattern, $uuid_sms);
        
        
    }

}

?>