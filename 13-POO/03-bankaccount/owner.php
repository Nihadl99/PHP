<?php

class owner
{
    public $name;
    public $revenue;
    public $bankAccount;


    public function __construct($n, $r=1200, $b = null)
    {
        $this->name=$n;
        $this->revenue = $r;
        $this->bankAccount = $b;
        owner :: $count++;
    }

    public function simulateSalary()
    {
        $this->bankAccount->dispositMoney($this->revenue);

        return $this;// les méthode peuvent se chainée
        
    }
    
}

?>