<html>
    <body>
        <form method="post">
            <center><b>COMPARACION DE 3 NUMEROS</b><br><br>
            <?php error_reporting(0);?>
            Primer Numero:<br>
            <input type="text" name="txtval1" value="" size="7"><br><br>
            Segundo Numero:<br>
            <input type="text" name="txtval2" value="" size="7"><br><br>
            
            <input type="submit" name="btcomp" value="Comparar"><br>

            <?php
                if($_POST['btcomp']=="Comparar"){
                    $a=$_POST['textval1'];
                    $b=$_POST['textval2'];
                    if($a==$b){
                        echo 'lalala';
                    }else{
                        echo 'fwfwfsf';
                    }
                }
            ?>
        </form>
    </body>
</html>