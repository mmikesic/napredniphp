<?php
$a = 5; 
$b = 10;
function addNumbers($a, $b)
{
return $a + $b;

}

echo addNumbers($a, $b), "\n";
?>



<?php
$name= 'Marko';
$age = 15;
$gender = 'male';
$dateOfBirth = '24.09.1986';



function displayPersonData ($name, $age, $gender, $dateOfBirth){

echo "Hi, my name is $name\n";
echo "I am $age old\n";
echo " I am $gender\n";
echo "My date of birth is $dateOfBirth\n";

}

echo displayPersonData($name, $age, $gender, $dateOfBirth), "\n";


?>

//Klasa
<?php

class Person
{
    const LEGAL_AGE = 18;

    const VALID_GENDERS = ['male', 'female'];

    protected string $name;

    public int $age;

    private string $gender;

    public string $dateOfBirth;
}

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setGender(string $gender)
    {
        if (!in_array($gender, self::VALID_GENDERS)) {
            throw new ValueError('Nije ispravan spol');
        }

        $this->gender = $gender;
    }

    public function age()
    {
        return $this->age;
    }

    public function displayPersonData()
    {
        echo "Hi, my name is {$this->name} \n";
        echo "I am {$this->age()} old\n";
        echo "I am a {$this->gender}\n";
        echo "My date of birth is {$this->dateOfBirth}\n";

        if ($this->isLegalAge()) {
            echo "I am over 18\n";
        }

        echo "I am a " . self::class . " class\n";
    }

    private function isLegalAge()
    {
        return $this->age >= self:: 
    }    
    
    class Employee extends Person
    {
        public function displayName()
        {
            echo "I am a {$this->name}\n";
        }
    }
    
    
    $person = new Employee();
    $person->setName('Marko');
    
    echo $person->displayName(); 

    ?>