<?php


/*
    -l Una representación textual completa del día de la semana /Sunday hasta Saturday
    -t devuelve el número de dias del mes
    -z devuelve el dia del año comenzando en 0


    $MONTHS = ['enero' => 1, 'febrero' =>2, 'marzo' =>3, 'abril' =>4, 'mayo' =>5, 'junio' => 6,
       'julio' =>7, 'agosto' =>8, 'septiembre' =>9, 'octubre' =>10, 'noviembre' =>11, 'diciembre' =>12];
        
    $WEEK = ["monday","tuesday","wednesday","thrusday","friday","saturday","sunday"];


    //echo date('l', mktime(hora,minuto,segundo,$mes,dia,$year));
    //mktime(0,0,0,$mes,1,$year);
*/

    class Calendario{
        private $MONTHS = ['enero' => 1, 'febrero' =>2, 'marzo' =>3, 'abril' =>4, 'mayo' =>5, 'junio' => 6,
       'julio' =>7, 'agosto' =>8, 'septiembre' =>9, 'octubre' =>10, 'noviembre' =>11, 'diciembre' =>12];
        
        private $month;
        private $year;
        private $WEEK = ["monday","tuesday","wednesday","thrusday","friday","saturday","sunday"];
        
        public function __construct(string $month, string $year){
            $this->month = $month;
            $this->year = $year;
        }
      
        public function mostrarCalendario(){
            $this->crearCalendario($this->month,$this->year,$this->MONTHS,$this->WEEK);
        }

        private function crearCalendario($month, $year,$MONTHS,$WEEK){
            $chosenMonth = $MONTHS[strtolower($month)];
            $nombreMes = date('F',mktime(0,0,0,$chosenMonth,1,$year));
            echo "<h1>{$nombreMes} {$year}</h1>";
            echo "<article class='month'>";
            $this->crearDiasSemana($WEEK);
            $this->crearDiasMes($chosenMonth,$year,$MONTHS);
        }

        private function crearDiasSemana($WEEK){
            echo "<section class='header'>";
            foreach($WEEK as $day){
                echo "<p class='dayname'>{$day}</p>";
            }
            echo "</section>";
        } 
      
        private function crearDiasMes($month,$year,$MONTHS){
            $diasMes = date('t',mktime(0,0,0,$month,1,$year));
            $comenzoElMes = false;
            $diaComienzoMes = intval(date('N',mktime(0,0,0,$month,1,$year)));
            echo "<section class='dias'>";
            for($i = 1 ; $i <= $diasMes; $i++ ){
              if($i === $diaComienzoMes && $comenzoElMes ===false){
                  $comenzoElMes = true;
                  $i = 1;
                  echo "<p>{$i}</p>";
              }else if($comenzoElMes === false){
                  echo "<p> </p>";
              }else{
                  echo "<p>{$i}</p>";
              }
            }
            echo "</section>";
        }

    }


?>