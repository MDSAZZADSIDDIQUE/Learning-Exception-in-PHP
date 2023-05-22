<?php
class Student
{
    private $name;
    private $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 18) {
            throw new Exception('You are too young', 404);
        }
        $this->age = $age;
    }
}
try {
    $student = new Student('Sazzad', 2);
} catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getCode();
}
