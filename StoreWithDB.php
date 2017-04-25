<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RPUserOperationHistoryStoreWithDB
 *
 * @author sachin.singh
 */

class StoreWithDB {

    private static $instance;
    private $conn;

    //private static $user;

    public function __construct($db) {
        $this->conn = $db->getConnection();
          
    }

    public static function getInstance($db) {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class($db);
        }
        return self::$instance;
    }
    
    public function saveOpenRate(OpenRateDAO $openRateDao){  
        $mid = $openRateDao->getMailerId();
        $srcId = $openRateDao->getSourceId();
        
        if(empty($mid)) 
            return false;
        
        try {
            $query = "INSERT INTO openrate_tracker";
            $query .= "(mid,src_id,created_date)";
            $query .= " VALUES(:mid,:src_id,:created_date)";
          
            $commonOpenrate = $this->conn->prepare($query);
            $commonOpenrate->bindValue(':mid', $mid, PDO::PARAM_INT);      
            $commonOpenrate->bindValue(':src_id', $srcId, PDO::PARAM_INT);
            $commonOpenrate->bindValue(':created_date', date('Y-m-d'), PDO::PARAM_STR);              
            $commonOpenrate->execute();  
            return true;
             
        } catch (PDOException $e) {
             $msg = __CLASS__ . __FUNCTION__ . '## SQL Error=' . $e->getMessage();  
            throw new RPDbException($msg, 1);
        } catch (ncDatabaseException $e) {
             $msg = __CLASS__ . __FUNCTION__ . '## SQL Error=' . $e->getMessage(); 
            throw new RPDbException($msg, 1);
        }      
        
    }
    
}

?>