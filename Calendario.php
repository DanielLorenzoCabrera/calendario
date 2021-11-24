<?php

/*

    -t devuelve el número de dias del mes
    -z devuelve el dia del año comenzando en 0


*/


    class Mes{
        private $nombre;
        private $dias;
        private $diaComienzoMes;
        private $diaFinMes;
        
        public function __construct(string $nombre,int $dias){
            $this->nombre = $nombre;
            $this->dias =  $dias;
        
        }

        public function getNombre(){
            return $this->nombre;
        }



    }

    $mes = 1; //enero
    $year = 2006;

    echo date('l', mktime(0,0,0,$mes,1,$year));

    //mktime(0,0,0,$mes,1,$year);


    class Calendario{
        private $meses = ['enero' => 1, 'febrero' =>2, 'marzo' =>3, 'abril' =>4, 'mayo' =>5, 'junio' => 6,
       'julio' =>7, 'agosto' =>8, 'septiembre' =>9, 'octubre' =>10, 'noviembre' =>11, 'diciembre' =>12];
        
        public function __construct(string $mes, string $year){
            
        }


    }


    $enero = new Mes("enero",31);

    //echo $enero->getNombre();






?>