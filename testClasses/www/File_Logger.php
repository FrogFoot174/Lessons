<?php

class File_Logger {
    public $f;
    public $name;
    public $lines = [];
    public function __construct($name, $fname) {
        $this->name = $name;
        $this->f = fopen($fname, "a+");
        $this->log("### construct() called!");
    }

    public function __destruct() {
        $this->log("### destruct() called!");
        fputs($this->f, join("", $this->lines));
        fclose($this->f);
    }

    public function log($str) {
        $prefix = " [" .date("Y-m-d_h:i:s ") . "{$this->name} ] ";
    $str = preg_replace('/A/m', $prefix, rtrim($str));
    $this->lines[] = $str ."\n";
    }
}

    for ($n=0; $n<10; $n++) {
        $logger = new File_Logger("test$n", "test.log");
        $logger->log("Hello!");
    }
exit();
?>