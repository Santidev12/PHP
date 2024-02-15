<!DOCTYPE html>
<html>
<body>
        <?php 
        $num1 = 2;
        $num2 = 1;
        $name = "Santiago";
        $lastname = "Pulido";

        if($num1 > 0 && $num2 < $num1){
            echo $name;
        }else if($num1 > 0 && $num2 >= $num1){
            echo $lastname;
        }else{
            echo $name . " " . $lastname;
        }
        ?>
</body>
</html>