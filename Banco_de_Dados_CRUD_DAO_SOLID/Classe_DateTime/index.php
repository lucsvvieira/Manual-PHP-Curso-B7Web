<?php

$date = new DateTime(); // Pegando a data atual e armazenando na variável $date
$date->add( DateInterval::createFromDateString('2 days') );
$date->sub( DateInterval::createFromDateString('2 days') );

$date->setTimezone( new DateTimeZone('America/Sao_Paulo') );

echo $date->format('d/m/Y H:i:s'); // Formatando a data de forma que apareça o dia, mês e ano.



$date1 = new DateTime('2022/04/28');
$date2 = new DateTime('2022/06/20');



if($date1 > $date2) {
    echo "DATE 1 é maior que DATE 2";
} else {
    echo "DATE 2 é maior que DATE 1";
}





$today = new DateTime();
$end = new DateTime('2022-12-31');

$diff = $today->diff($end);

echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');