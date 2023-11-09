<html>
    <body bgcolor="#D1F2EB ">
        <form method="post">
        <center><b>COMPARACION DE 3 NÚMEROS</b><br><br>
            <?php error_reporting(0);?>
            Primer Número:<br>
            <input type="text" name="txt1" value="" size="3"><br><br>
            Segundo Número:<br>
            <input type="text" name="txt2" value="" size="3"><br><br>
            Tercer Número:<br>
            <input type="text" name="txt3" value="" size="3"><br><br>
            <input type="submit" name="okk" value="ok">

            <?php
            if($_POST['okk']="ok"){
                $a=$_POST['txt1'];
                $b=$_POST['txt2'];
                $c=$_POST['txt3'];

                if(($a==$b)&&($b==$c)&&($a==$c)){
                    echo "<script>alert('Los 3 números son iguales')</script>";
                }elseif(($a==$b)&&($b!=$c)&&($a!=$c)){
                    echo "<script>alert('El primer número y el segundo número son iguales, el tercer número es diferente')</script>";
                }elseif(($a!=$b)&&($b!=$c)&&($a==$c)){
                    echo "<script>alert('El primer número y el tercer número son iguales, el segundo número es diferente')</script>";
                }elseif(($a!=$b)&&($b==$c)&&($a!=$c)){
                    echo "<script>alert('El segundo número y el tercer número son iguales, el primer número es diferente')</script>";
                }else{
                    echo"<script>alert('Todos los números son diferentes')</script>";
                }
            }
            ?>
        </form>
    </body>
</html>