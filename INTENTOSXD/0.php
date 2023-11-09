<html>
    <head>
        <title>
            CALCULADORA
        </title>
    </head>
    <body>
    <form method="post">
        <?php error_reporting(0);?>
        <?php
            if ($_POST["btsum"]=="+"){
                $va1=$_POST['txtval1'];
                $va2=$_POST['txtval2'];
            
                $result=$va1+$va2;
                /*echo "La suma es: ".$sum;
                echo "<script>alert('La suma es $sum')</script>"
                */
            }
            if ($_POST["btres"]=="-"){
                $va1=$_POST['txtval1'];
                $va2=$_POST['txtval2'];
            
                $result=$va1-$va2;
                /*echo "La suma es: ".$sum;
                echo "<script>alert('La suma es $sum')</script>"
                */
            }
            if ($_POST["btmul"]=="*"){
                $va1=$_POST['txtval1'];
                $va2=$_POST['txtval2'];
            
                $result=$va1*$va2;
                /*echo "La suma es: ".$sum;
                echo "<script>alert('La suma es $sum')</script>"
                */
            }
            if ($_POST["btdiv"]=="/"){
                $va1=$_POST['txtval1'];
                $va2=$_POST['txtval2'];
            
                $result=$va1/$va2;
                /*echo "La suma es: ".$sum;
                echo "<script>alert('La suma es $sum')</script>"
                */
            }
        ?>
        <center><b>CALCULADORA</b><br><br>
        <table border="0">
            <tr>
                <td>
                    Valor 1:
                <input type="text" name="txtval1"- value="<?php echo $va1;?>" size="3">
                    Valor 2:
                <input type="text" name="txtval2"- value="<?php echo $va2;?>" size="3">
                </td>
            </tr>
            <tr>
                <td>
                    <center><input type="submit" name="btsum" value="+">
                    <input type="submit" name="btres" value="-">
                    <input type="submit" name="btmul" value="x">
                    <input type="submit" name="btdiv" value="/">
                </td>
            </tr>
            <tr>
                <td>
                    <center>Resultado:
                </td>
            </tr>
            <tr>
                <td>
                    <center><input type="text" name="txtresult" value="<?php echo $result;?>" size="3">
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>