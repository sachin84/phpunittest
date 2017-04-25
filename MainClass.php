<?php

class MymainClass {

    public function insertInLog($var1, $var2) {
        file_put_contents('./mylog', $var1, $var2);
		echo "....I am here ...\r\n";
        return $var1 + $var2;
    }

    public function getLogFile($var1) {
        $output = file_get_contents('./mylog');
        
        return $output;
    }
}
?>