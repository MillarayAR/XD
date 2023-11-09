<html>
    <body bgcolor="#D1F2EB ">
        <form method="post">
            <center><b>DIAS DE LA SEMANA<br><br>
            <?php error_reporting(0);?>
            <input type="text" name="txt" value="" size="5">
            <input type="submit" name="btok" value="OK">
        <?php
        if($_POST['btok']=="OK"){
            $dia=$_POST['txt'];
            switch($dia){
                case "1":
                    echo "<script>alert('Corresponde al dia Lunes')</script>";
                    break;
                case "2":
                    echo "<script>alert('Corresponde al dia Martes')</script>";
                    break;
                case "3":
                    echo "<script>alert('Corresponde al dia Miércoles')</script>";
                    break;
                case "4":
                    echo "<script>alert('Corresponde al dia Jueves')</script>";
                    break;
                case "5":
                    echo "<script>alert('Corresponde al dia Viernes')</script>";
                    break;
                case "6":
                    echo "<script>alert('Corresponde al dia Sábado')</script>";
                    break;
                case "7":
                    echo "<script>alert('Corresponde al dia Domingo')</script>";
                    break;
                default:
                    echo "<script>alert('Ingresa un número válido')</script>";
            }
        }
        ?>
        </form>
    </body>
</html>