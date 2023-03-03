//Singletton pattern

<?php

class takeBeer {

	private static $beer = null;
    
    private function __construct() {
    }
    
    public static function takeBeer() {
    
    	if ( self::$beer === null ) {
        	echo "One beer please!!\n";
        	self::$beer = new takeBeer();
        }
        
        return self::$beer;
    
    }


}

$guest = takeBeer::takeBeer();


?> 