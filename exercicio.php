<?php
$contDivisaoExata = 0;
$primos = [];

// 3, 4, 5, ...49, 50
for ($numeroAtual = 22; $numeroAtual <= 50; $numeroAtual++) {

    // 2 ... 21
    for ($numeroAvaliar = $numeroAtual; $numeroAvaliar > 1; $numeroAvaliar--) {
        //  0   = 20 / 2
        $resto = $numeroAtual % $numeroAvaliar;
        
        if ($resto == 0) {
            $contDivisaoExata +=1;
        }
    }

    if ($contDivisaoExata == 1) {
        $primos[] = $numeroAtual;
    }
}

