<?php 
/*Bom...vamos lá.

Ok...vamos entrar com os respectivos dados.*/

 echo "<br>Hora Inicial = ".$horaInicial = "08:00:00";
 echo "<br>Hora Final = ".$horaFinal   = "18:00:00";
 echo "<br>Intervalo = ".$intervalo   = "02:00:00";
  echo "<br>Intervalo = ".$horaAuxuliar   = "00:00:00";
 /*
  	Bom...primeiramente...você terá que converter esses valores com a função strtotime 
   */

 $horaInicial  = strtotime($horaInicial);
 $horaFinal    = strtotime($horaFinal);
 $intervalo    = strtotime($intervalo);
 $horaAuxuliar = strtotime($horaAuxuliar);
 /*
  	Bom...agora é só dividir os valores...e você terá o total de segundos trabalhados
  */
 echo "<br><br>Total de Segundos trabalhados = ".$totalSegundos = ($horaFinal - $horaInicial);
 
 /* Observe que...já que estamos falando de segundos e você quer 
  	saber o total de horas trabalhas...então...você terá que dividir pela quantidade de segundos existente em 1 hora...que no caso é 3600 segundos ok*/
 echo "<br>Total de Horas Trabalhadas = ".$totalHora = $totalSegundos / 3600; 
 
 /*E não podemos esquecer a hora de intervalo né...observe que criei uma hora auxiliar para que possa ser interagaida com ele beleza...*/
 echo "<br>Segundos Intervalor = ".$segundosIntervalo = $intervalo - $horaAuxuliar;
  echo "<br>Intervalo = ".$horaIntervalo = $segundosIntervalo /3600;
 
 /* E finalmente para que você saiba realmente quantas horas o fulano trabalhou...de acordo com as horas inseridas pelo usuario é claro...*/
 
 echo "<br>Total de Horas trabalhadas menos o intervalo = ". $horasTrabalhadas = $totalHora - $horaIntervalo;
 
  $segundosTotal = $totalSegundos - $segundosIntervalo;
  
  /*E para que tudo saia num formato bunitinhu...te messa função aí para converter a parada ok...*/
  echo "<br>Horas = ".$hora = converterHora($segundosTotal);
  
  
 function converterHora($total_segundos){
			
			$hora = sprintf("%02s",floor($total_segundos / (60*60)));
			$total_segundos = ($total_segundos % (60*60));
			
			$minuto = sprintf("%02s",floor ($total_segundos / 60 ));
			$total_segundos = ($total_segundos % 60);
			
			$hora_minuto = $hora.":".$minuto;
			return $hora_minuto;
  }
 
?>