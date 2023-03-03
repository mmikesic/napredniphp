<?php
$connection = null;
try{
$connection = new mysqli('localhost', 'bedev', 'Veronica7!', 'bedev2022'); 
} catch(\Throwable $th){
    echo "Dogodilo se greška kod spajanja!\n"; 
}

if($connection !== null) {
    $result = $connection -> query('SELECT * FROM employee'); 

    while ($row = $result->fetch_object()){

        echo ($row);
    }

}

