<?php
class person{
public string $name;
public function getName()
{
return $this->name;
}
}
$employee = new Person();
$employee->name = 'Marko';

echo $employee->name, ' ', $employee->getName(), "\n";