<?php


/*
    -l Una representación textual completa del día de la semana /Sunday hasta Saturday
    -t devuelve el número de dias del mes
    -z devuelve el dia del año comenzando en 0


*/

    $MONTHS = ['enero' => 1, 'febrero' =>2, 'marzo' =>3, 'abril' =>4, 'mayo' =>5, 'junio' => 6,
       'julio' =>7, 'agosto' =>8, 'septiembre' =>9, 'octubre' =>10, 'noviembre' =>11, 'diciembre' =>12];
        


    $mes = 1; //enero
    $year = 2006;

    //echo date('l', mktime(0,0,0,$mes,1,$year));

    //mktime(0,0,0,$mes,1,$year);

/*
    class Calendario{
        private $MONTHS = ['enero' => 1, 'febrero' =>2, 'marzo' =>3, 'abril' =>4, 'mayo' =>5, 'junio' => 6,
       'julio' =>7, 'agosto' =>8, 'septiembre' =>9, 'octubre' =>10, 'noviembre' =>11, 'diciembre' =>12];
        
        public function __construct(string $mes, string $year){
            
        }


    }
    */


    function chooseMonth($month, $year, $MONTHS){
        $chosenMonth =  $MONTHS[strtolower($month)];
        echo date('l', mktime(0,0,0,$chosenMonth,1,$year));
    }

  


?>