<?php

    class Person{
        private $name;
        private $email;
        public static $ageLimit = 40;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct(){
            echo __CLASS__.' destroyed <br>';
        }

        public function getName(){
            return $this->name;
        }
 
        public function setName($name){
            $this->name = $name;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created!<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }

    echo Person::$ageLimit;     // public static returns like this.
    echo Person::getAgeLimit(); // OR like this.

    //$person1 = new Person('Abe Choi', 'abe@abe.com');
    //$person1->setName('Abe Choi');
    //$person1->setEmail('abe@abe.com');

    //echo $person1->getName()."<br>";
    //echo $person1->getEmail()."<br>";

    //$customer1 = new Customer('Abe Choi', 'abe@choi.com', 300);

    //echo $customer1->getBalance();

