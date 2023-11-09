<html>
    <body bgcolor="#D1F2EB ">
    <form method="post">
            <center><b>CENTIMETROS A PULGADAS</b><br><br>
    <?php error_reporting(0);?>
        Centimetros:
        <input type="text" name="cm" value="<?php echo $cm;?>" size="5"><br><br>
        <input type="submit" name="btconv" value="Convertir"><br>
    </form>
    <?php
        if($_POST['btconv']=="Convertir"){
        $cm=$_POST['cm'];
        $result=$cm/2.54;
        echo "<script>alert('Los $cm centimetros equivalen a $result pulgadas')</script>";
    }
    ?>
    </body>
</html>