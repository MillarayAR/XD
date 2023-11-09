<html>
    <body bgcolor="#D1F2EB ">
        <form method="post">
            <?php error_reporting(0);?>
            <center><b>INDICE DE MASA CORPORAL</b><br><br>
            Peso:
            <input type="text" name="txpes" value="<?php echo $p;?>" size="5"> kg<br><br>
            Altura:
            <input type="text" name="txal" value="<?php echo $h;?>" size="5"> cm<br><br>
            <input type="submit" name="calc" value="Calcular"><br><br>

            <?php
            if($_POST['calc']=="Calcular"){
                $p=$_POST['txpes'];
                $h=$_POST['txal'];
                $h=$h*0.01;
                $result=round($p/($h**2));
                if($result>20&&$result<25){
                    echo "Tu masa corporal es $result (Estas en un rango normal)";
                }elseif($result>25&&$result<30){
                    echo "Tu masa corporal es $result (Tienes sobrepeso)";
                }elseif($result>30&&$result<40){
                    echo "Tu masa corporal es $result (Tienes obesidad)";
                }elseif($result>18&&$result<20){
                    echo "Tu masa corporal es $result (Tienes bajo peso)";
                }else{
                    echo "Ingrese variables validas";
                }

            }
            ?>
        </form>
    </body>
</html>