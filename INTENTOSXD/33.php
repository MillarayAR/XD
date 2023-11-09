<html>
    <body>
        <form method="post">
            <center><b>COMPARACION DE 3 NUMEROS</b><br><br>
            <?php error_reporting(0);?>
            Primer Número:<br>
            <input type="text" name="txtval1" value="" size="7"><br><br>
            Segundo Número:<br>
            <input type="text" name="txtval2" value="" size="7"><br><br>
            Tercer Número:<br>
            <input type="text" name="txtval3" value="" size="7"><br><br>
            <input type="submit" name="btcomp" value="Comparar">

            <?php
                if($_POST['btcomp']=="Comparar"){
                    $n1=$_POST['textval1'];
                    $n2=$_POST['textval2'];
                    $n3=$_POST['textval3'];

                    if($n1==$n2 && $n1==$n3 && $n2==$n3){
                        echo "<script>alert('Los 3 número son iguales')</script>";
                    }elseif($n1==$n2 && $n1==$n3 && $n2!=$n3){
                            echo "<script>alert('El primer numero y el segundo son iguales, el tercero es diferente')</script>";
                    }elseif($n1==$n2 && $n1!=$n3 && $n2==$n3){
                            echo "<script>alert('El primer numero y el tercero son iguales, el segundo es diferente')</script>";
                    }elseif($n1!=$n2 && $n1==$n3 && $n2==$n3){
                            echo "<script>alert('El segundo numero y el tercero son iguales, pero el primero es diferente')</script>";
                    }else{
                        echo"<script>alert(todos son diferentes)</script>";
                    }
                }
            ?>
        </form>
    </body>
</html>