
<?php

function menu() {
    echo "1. consultar saldo\n";
    echo "2. consultar dinero\n";
    echo "3. retirar dinero\n";
}

$saldo = 1230;

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
                
    }
}



