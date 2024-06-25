
<?php

function menu() {
    echo "1. consultar saldo\n";
    echo "2. depocitar dinero\n";
    echo "3. retirar dinero\n";
}

$saldo = 15478;

while (true){

    menu();
    $opcion = readline("elecione un numero :");

    switch ($opcion){

        case '1':
            echo "su saldo es : $saldo\n";
            break;

        case '2':
            $deposito = readline("ingrese su cantidad a depositar : ");
            $saldo += $deposito;
            echo "su depocito fue exitoso\n";
            break;
        
            case '3':
                $retiro = readline("ingrese la cantidad a sacar : ");
                if ($retirar > $saldo){
                    echo "no tienes sufisientes saldo para retirar\n";
                } else {
                    $saldo -= $retiro;
                    echo "su retiro fue exsitoso\n";
                }
                break;
    }
}

