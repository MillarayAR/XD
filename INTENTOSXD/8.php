<html>
    <head>
        <title>
            MILLARAY
        </title>
    </head>
    <body>
        <form method="post">
            <center><b>FORMULARIO DE INGRESO</b><br><br>
            <table border="0">
                <tr>
                    <td>Nombre:</td>
                    <td><input type ="text" name="nom" value=""size="15" maxLength= "20"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="ape" value="" size="20" maxlength="25"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td>Masculino <input type="radio" name="rdSex" value="M">
                        Femenino <input type="radio" name="rdSex" value="F">
                        Otro <input type="radio" name="rdSex" value="A">
                    </td>
                </tr>
                <tr>
                    <td>Me gusta:</td>
                    <td>Jugar Play: <input type="checkbox" name="chJP" value="play">
                        Escuchar Música: <input type="checkbox" name="chEM" value="music" checked>
                        Leer Libros: <input type="checkbox" name="chLL" value="leer">
                    </td>
                </tr>
                <tr>
                    <td>Vivo en:</td>
                    <td><select name="selciu">
                        <option value="selmach">Machali</option>
                        <option value="selreng">Rengo</option>
                        <option value="selranc" selected>Rancagua</option>
                        <option value="selgran">Graneros</option>
                        <option value="selsf">San Fernando</option>
                    </select></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Guardar"></td>
                </tr>
            <tr>
                <td>Opinion:</td>
                <td> <textarea cols="20" rows="3" name="taopin" value="opinion"></textarea></td>
            </tr>
    </table>
        </form>
</body>
</html>