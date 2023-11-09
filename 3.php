<html>
    <body bgcolor="#D1F2EB ">
        <form method="post">
        <?php error_reporting(0);?>
        <center><b>CONVERSION DE TEMPERATURA</b><br><br>
        <?php

        if($_POST['btconv']=="convertir"){
            $G=$_POST['txtgrad'];
            $tipo=$_POST['selgra'];
            if($tipo=="selsel"){
                $result=($G*1.8)+32;
            }else{
                $result=($G-32)/1.8;
            }
        }
        //holi
        ?>
        <center>
            <input type="text" name="txtgrad" value="<?php echo $G;?>" size="3">
            <select name="selgra">
                <option value="selsel">Celsius</option>
                <option value="selfar">Fahrenheit</option>
            </select><br><br>
            <input type="submit" name="btconv" value="convertir"><br><br>
            <input type="text" name="txtresult" value="<?php echo $result;?>" size="3">
        </form>

    </body>
</html>