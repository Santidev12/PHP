<!DOCTYPE html>
<html>
<body>
        <?php 
        $altura = 4;
        $str = "* ";
        for ($i=1; $i <= $altura; $i++) { 
        $espacios = $altura - $i;
        $asteriscos = $i * 2 - 1;
        echo str_repeat("&nbsp;", $espacios) . str_repeat($str, $asteriscos) . "<br>";
        }
     
        ?>
</body>
</html>