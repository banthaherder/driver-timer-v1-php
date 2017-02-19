<?php

class driver{
    var $driver_name;
    var $driver_number;
    var $is_driver_back;
    var $return_time;
    var $messages = array();
    
    function __construct($name, $phone_number) {		
			$this->driver_name = $name;
			$this->driver_number = $phone_number;		

	}
    function get_name(){
        return $this->driver_name;
    }
    function get_number(){
        return $this->driver_number;
    }
    function get_status(){
        return $this->is_driver_back;
    }
    function get_return_time(){
        return $this->return_time;
    }
    function set_status($driver_status){
        $this->is_driver_back = $driver_status;
    }
    function set_return_time($rt){
        $this->return_time = $rt;
    }
    function add_message($m){
        $this->messages[] = $m;
    }
    function get_newest_message(){
        return current($this->messages);
    }
    
}

    // Initializes the driver 'objects'
    $vova = new driver("Vova", ***REMOVED***);
    $dawson = new driver("Dawson", ***REMOVED***);
    $kayti = new driver("Kayti", ***REMOVED***);
    $cienna = new driver("Cienna", ***REMOVED***);

?>