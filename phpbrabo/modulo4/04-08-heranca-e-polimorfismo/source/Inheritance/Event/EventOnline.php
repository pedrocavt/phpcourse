<?php 

namespace Source\Inheritance\Event;

class EventOnline extends Event
{
    private $link;
    
    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    function register($fullName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p>Show {$fullName}, cadastrado com sucesso</p>";
    }
}


?>