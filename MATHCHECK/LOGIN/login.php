<?
//Recibimos los valores que intrujo el usuario desde el formulario.
$usuario = $_POST["n_usuario"];
$password = $_POST["pwd"];
//Creamos la conexi�n a la BD
$conexion = mysql_connect("localhost","root","root");
mysql_select_db("tuteam",$conexion);

//Escribimos la sentencia SQL que ejecutaremos.
$sql = "SELECT id_usuario FROM usuario WHERE nombre_usuario = '$usuario' AND contrasenna='$password'";
//Ejecutamos la sentencia SQL
$comprobar = mysql_query($sql);

	//Contamos el numero de filas que arroja la sentencia SQL
	//Solo arrojar� el "id_usuario" en caso de que los datos introducidos por el usuario sean correctos
	//Por tanto arrojar� mas de -0- filas y eso nos indicar� que los datos son correctos
	
if(mysql_num_rows($comprobar) > 0)
	{
	//Asignamos a una variable lo que llevar� por -valor- la cookie
	$id_usuario = mysql_result($comprobar,0);
	//Establecemos la cookie para matener la sesi�n abierta.
	setcookie("misitio_userid","$id_usuario",time() + 3600);
	//hacemos la redirecci�n al archivo que evalua si se inicio sesi�n o no.
	header("Location:inicio.php");
	}
	
else
	echo "Usuario o Contrase�a incorrectos";

?>