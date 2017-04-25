<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."../vendor/autoload.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."../StoreWithDB.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."../MockPDOHelper.php";

class unit_StoreWithDBTest extends PHPUnit_Framework_TestCase {

    public function testSaveOpenRate() {
        $query = "INSERT INTO openrate_tracker";
        $query .= "(mid,src_id,created_date)";
        $query .= " VALUES(:mid,:src_id,:created_date)";

//        $pdoStmtMock = $this->getMockBuilder('PDOStatement')
        $pdoStmtMock = $this->getMockBuilder('MyPDOStatement')
                ->setMethods(array( 'execute', 'fetch', 'fetchAll'))
                ->getMock();
        $pdoStmtMock->expects($this->any())
                ->method('execute')
                ->will($this->returnValue(TRUE));
        $pdoStmtMock->expects($this->any())
                ->method('fetch')
                ->will($this->returnValue(array('id' => '123')));

        $pdoMock = $this->getMockBuilder('MockPDOHelper')->getMock();
        $pdoMock->expects($this->once())
                ->method('prepare')
                ->with($this->equalTo($query))->will($this->returnValue($pdoStmtMock));

        $ncMockDBObj = new NcPDOMockHelper($pdoMock);

        $openRateDao = new OpenRateDAO();
        $openRateDao->setMailerId(1);
        $openRateDao->setSourceId(2);
        $rpStoreObj = new StoreWithDB($ncMockDBObj);
        $output = $rpStoreObj->saveOpenRate($openRateDao);
        $this->assertTrue($output);
    }

}

?>