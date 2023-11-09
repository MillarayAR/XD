<html>
    <body>
        <form method="post">
            <center><b>COMPARACION DE 3 NUMEROS</b><br><br>
            <?php error_reporting(0);?>
            Primer Numero:<br>
            <input type="text" name="tx1" value="<?php echo $a;?>" size="7"><br><br>
            Segundo Numero:<br>
            <input type="text" name="tx2" value="<?php echo $b;?>" size="7"><br><br>
            
            <input type="submit" name="btcomp" value="Comparar"><br>

            <?php
                if($_POST['btcomp']=="Comparar"){
                    $a=$_POST['tex1'];
                    $bus=$_POST['tex2'];
                    if($a==2){
                        echo 'lalala';
                    }else{
                        echo 'fwfwfsf';
                    }
                }
            ?>
        </form>
    </body>
</html>