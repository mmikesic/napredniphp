<?php
$servername = 'localhost';
$username = 'bedev2';
$password = 'Veronica7!'; 
try {
    $connection = new PDO
    ("mysql: host=$servername; dbname = classicmodels", $username, $password);
    echo "Connected to database succesfully\n";
    $connection->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
   

} catch (\PDOException $e) {
    echo "Connection failed"; 
    $e -> getMessage(); 
    
}


try {
   $connection->beginTransaction();
   $connection->exec("INSERT INTO classicmodels.orders(orderNumber, orderDate, requiredDate, status, customerNumber) VALUES (12333, '2022-03-03', '2022-04-04', 'shipped', 24)");
  $connection->exec("INSERT INTO classicmodels.orderdetails(orderNumber, productCode, quantityOrdered, priceEach, orderLineNumber) VALUES ( '10200', 'S18_999', '4', '15', '13')");
    $connection->commit(); 

} catch (\PDOException $e) {
    $connection->rollBack();
    echo "An error occurred while writing to the database\n" . $e->getMessage();

}


