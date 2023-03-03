
Vjezba6: Napišite funkciju koja će za određeni uvjet baciti Exception u glavnom programu ulovite tu grešku. 
Proširite try catch s finally klauzulom koja će ispisati određenu poruku.Napišite svoju exception 
klasu koju acite iz funkcije iz prvog dijela zadatka te prepišite try catch blok da ulovi grešku.
<?php

class falseNumberException extends Exception {
  public function __construct($message = "Number must be greater than 0.", $code = 0, Throwable $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}

function checkNumber($number) {
  if (!is_numeric($number) || $number <= 0) {
    throw new falseNumberException();
  }
  // Ako je broj ispravan, nastavljamo s izvođenjem funkcije
  // ...
}

try {
  checkNumber("abc"); // Pozivanje funkcije s neispravnim ulazom
} catch (falseNumberException $e) {
  echo "Error catched: " . $e->getMessage();
} finally {
  echo "Try-catch ended."; // Poruka koja će se uvijek ispisati
}

?>
