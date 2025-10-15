<?php 

    class convertisseur{
        public $taux = "";
        public $euro ="€"; 
        public $dollars ="$"; 




        function __construct()
        {   $this->taux = "0.88351";
            $this->euro ="0"; 
            $this->dollars ="0";
            
        }

        function euros2dollars($euro){
            if($this->taux != 0 ){
                $this->dollars = $euro / $this->taux;
                return $this->dollars ; 
            } else{
                echo"division par 0 impossible";
                return NAN ; 
            }
        }


        function dollars2euros($dollars){
            
                $this->euro = $dollars * $this->taux;
                return $this->euro ; 
            
        }


    }