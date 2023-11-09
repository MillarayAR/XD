<html>
    <body bgcolor="#D1F2EB ">
        <form method="post">
            <center><b>SEGUNDOS A MINUTOS</b><br><br>
            <?php error_reporting(0);?>
            <?php
            if($_POST['conv']=="convertir"){
                $num=$_POST['txtseg'];
                $min=$num/60;
                $lol=floor($min);
                $seg=floor(($min-$lol)*100);
                
                echo "<script>alert('Los $num segundos, corresponden a $lol minutos y $seg segundos aproximadamente')</script>";
            }

            ?>
            Segundos:
            <input type="text" name="txtseg" value="<?php echo $num;?>" size="4">
            <input type="submit" name="conv" value="convertir"><br><br>
        </form>
    </body>
</html>