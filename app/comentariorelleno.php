<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form>
    Tema <br>
    <input type="text" name="Tema"> <br>
    Comentario: <br>
    <textarea name="textarea" rows="10" cols="50"><?php $_REQUEST ?></textarea> 
    
    <br><br>
    
      <button name="boton" value="Detalle">Detalle</button>&nbsp;
      <button name="boton" value="Nueva Opinion">Nueva Opinion</button>&nbsp;
      <button name="boton" value="Terminar">Terminar</button>&nbsp;
    
</form>
</body>
</html>

<?php ?>