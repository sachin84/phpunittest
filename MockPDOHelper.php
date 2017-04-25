<?php

class MockPDOHelper extends PDO {

    public function __construct() {
        
    }

}

class MyPDOStatement extends PDOStatement {

    public function __construct() {
        
    }

    public function bindParam($parameter, &$param, $type = NULL, $maxlen = NULL, $driverdata = NULL) {
       echo "--Param----";
        return true;
    }

    public function bindValue($parameter, $param, $type = NULL) {
       echo "hhhh----";
        return true;
    }
    
}

class NcPDOMockHelper {

    public static $mockObj;

    function __construct($mockObj) {
        NcPDOMockHelper::$mockObj = $mockObj;
    }

    public function getConnection($force = false) {
        return NcPDOMockHelper::$mockObj;
    }

}

?>