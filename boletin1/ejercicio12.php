<!DOCTYPE html>
<html>
<body>
        <?php 
        $num = 2;
        while($num <= 100){
                $es_primo = true;
                $divisor = 2;

                while ($divisor <= sqrt($num)) {
                       if($num % $divisor == 0){
                        $es_primo = false;
                        break;
                        }
                        $divisor++;
                }

           if($es_primo){
                echo $num . "<br>";
           }

           $num++;
        }
        ?>
</body>
</html>