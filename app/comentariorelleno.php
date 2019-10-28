
<form name='comentariorelleno' method="GET">
    Tema <br>
    <textarea name="Tema" rows="1" cols="50"><?php echo $_REQUEST['Tema']; ?></textarea> <br>
    Comentario: <br>
    <textarea name="comentario" rows="10" cols="50" maxlength="300"><?php echo $_REQUEST['comentario']; ?></textarea> 
    
    <br><br>
    
    <input type="submit" name="boton" value="Detalle"> &nbsp;
	<input type="submit" name="boton" value="Nueva Opinion"> &nbsp;
	<input type="submit" name="boton" value="Terminar"> &nbsp;
    
</form>
