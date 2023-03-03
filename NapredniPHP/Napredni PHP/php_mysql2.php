<?php


$config = require 'config.php';

try{
$connection = new PDO ('mysql:host=localhost;dbname=bedev2022', $config['dbuser'], $config['dbpass'], );
$connection -> beginTransaction();
$statement = $connection->prepare ("INSERT INTO department(department_name, budget, employee_id) VALUES (:department_name, :budget, :employee_id )");
$connection-> commit();
$department_name = 'Marko';
$employee_id = 33;
$budget = 5000;

//$statement->bindParam(':department_id', $department_id);
$statement->bindParam(':department_name', $department_name);
$statement->bindParam(':budget', $budget);
$statement->bindParam(':employee_id', $employee_id);
$statement->execute(); 

}catch (PDOException) {

echo "Dogodila se greška kod spajanja na bazu\n";
return;
}
$query = $connection->query('SELECT * FROM department_name');

while ($query->fetch(PDO::FETCH_ASSOC)) {

}

//foreach ($query as $row) {

  //  var_dump ($row);
//}


echo "Kraj programa\n";
 