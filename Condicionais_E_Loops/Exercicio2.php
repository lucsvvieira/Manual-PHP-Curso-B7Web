<?php

for ( $i=0; $i < 20; $i++) {
    for ( $j=0; $j < 20; $j++) {

        if ($j <= $i) {
            echo '-';    
        }
    }
    echo PHP_EOL;
}
