<?php
class Worker
{
    private $name;
    private $age;
    private $salary;
    	public function setName($n) {
        $this -> name = $n;
    }
    public function getName() {
        return $this -> name;
    }
    public function setAge($a) {
         if ($this -> checkAge($a)) {
                     $this -> age = $a;
         }
		 else 
		 {return $a;}
    }
    public function getAge() {
        return $this -> age;
    }
     public function setSalary($s) {
        $this -> salary = $s;
    }
    public function getSalary() {
        return $this -> salary;
    }
    private function checkAge($a) {
        if ($a >= 1 && $a <= 100) {
           return true;
        }
        else 
        {
            return false;
        }
    }
    }
$obj = new Worker();
$obj -> setName ("Иван");
$obj -> setAge (30);
$obj -> setSalary  (1000);
$obj2 = new Worker();
$obj2 -> setName  ("Вася");
$obj2 -> setAge  (26);
$obj2 -> setSalary  (2000);
echo "Сумма возрастов:". ($obj2 -> getAge() + $obj -> getAge());
echo "<br>";
echo "Сумма зарплат:". ($obj -> getSalary() + $obj2 -> getSalary());

