<!DOCTYPE html>
<html>
<body>
        <?php 
        $nota = 5;
        
       switch (true) {
            case ($nota < 5):
                echo "Suspenso";
                break;
            case ($nota >= 5 && $nota <= 6):
                echo "Suficiente";
                break;
            case ($nota > 6 && $nota <= 7):
                echo "Bien";
                break;
            case ($nota > 7 && $nota <= 9):
                echo "Notable";
                break;
            case ($nota > 9):
                echo "Sobresaliente";
                break;
            default:
                echo "nigun numero";
                
       }
       
        ?>
</body>
</html>