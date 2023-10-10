<?php
$numero_sorteado = rand(1,99);

echo $numero_sorteado."<br/>";

switch($numero_sorteado){
 case 4:
    echo "Maculan ganhou!";
    break;
case 6:
    echo "Caua ganhou!";
    break;

case 7:
    echo "Vini ganhou!";
    break;

    case 12:
        echo "Manu ganhou!";
        break;

        case 17:
            echo "Polles ganhou!";
            break;

            case 21:
                echo "Esdras ganhou!";
                break;

                case 33:
                    echo "Igor ganhou!";
                    break;

                    case 67:
                        echo "Leo ganhou!";
                        break;

                        case 69:
                            echo "Thales ganhou!";
                            break;

                            case 75:
                                echo "Zimmerman ganhou!";
                                break;

default:
 echo "ninguem ganhou o sorteio";
 break;
}

?>