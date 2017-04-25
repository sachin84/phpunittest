<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OpenRateDAO
 *
 * @author Swadesh Kumar
 */
class OpenRateDAO {
    
    private $mailerId;
    private $sourceId;
    
    public function getMailerId() {
        return $this->mailerId;
    }

    public function getSourceId() {
        return $this->sourceId;
    }

    public function setMailerId($mailerId) {
        $this->mailerId = $mailerId;
    }

    public function setSourceId($sourceId) {
        $this->sourceId = $sourceId;
    }


    
    
}

?>
