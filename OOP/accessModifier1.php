<?php
    
    class Fund{
        private $fund;
        function __construct($initialFund = 0){

            $this->fund = $initialFund;

        }

        public function addFund($money){

            $this-> fund += $money;

        }

        public function deductFund($money){
            $this-> fund -= $money;

        }

        public function totalFund(){
            echo "Your Total Fund is : {$this->fund} \n";

        }

    }

    $obj1 = new Fund(100);
    $obj1->totalFund();

    $obj1 ->addFund(10);
    $obj1->totalFund();

    $obj1 -> deductFund(20);
    $obj1->totalFund();

    
    
   