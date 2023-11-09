<html>
<body bgcolor="#D1F2EB ">
<?php error_reporting(0);?>
    <form method="post">
            <center><b>PAR O IMPAR</b><br><br>
        <input type="text" name="num"- value=""><br><br>
        <input type="submit" name="btcomp" value="comprobar">
        <?php
    if ($_POST['btcomp']=="comprobar"){
        $num=$_POST['num'];
        if ($num==0){
            echo "<script>alert('Este número NO ES VALIDO')</script>";
        }else{
            if($num%2==0){
                echo "<script>alert('El número es PAR')</script>";
            }else{
                echo "<script>alert('El número es IMPAR')</script>";
            }
        }
    }

?>
    </form>
</body>
</html>