<?
	//Verificamos si la cookie ya se ha establecido. 
	//[La cookie se establece al iniciar sesi�n con datos correctos]
if(isset($_COOKIE["misitio_userid"]))
	echo "Usuario con sesi�n iniciada";
	//En caso contrario indicamos que no se ha iniciado sesi�n.
	//Y poner un link mediante HTML para ir al formulario de inicio.
else
	echo "No haz iniciado sesi�n <br /> <a href=iniciarsesion.html'>Iniciar Sesi�n</a>";
?>