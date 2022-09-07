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

$numeros = [1 , 2, 3, 4, 5, 6, 7, 8, 9, 10]; //30
// MDC Maximo Divisor Comum
// 15 10 - 5

// transformar um valor decimal em binario (010101)
14 - 1110
14 == [1, 1, 1, 0]
1 x 2 = 1 x 1
1 x 3 = 1 x 1 x 1
1 ou 0

// Potenciaçao

Bruno
decimal -> binario
palindrome - (ana, otto, subinoonibus)