 <?php 
    $usuario = $_post['usuario'];
    $clave= $_post['clave'];

    $conexion= mysql_connect("localhost", "root", "","bdlogin");
    $conexion= ""select * from usuarios were usuario='usuario' and clave='$clave';
    $resultado=mysql_query($conexion, $consulta);

    $filas=mysql_num_rows($resultado);

    if ($filas>0){
    	header ("location:index.html")
    } else {
    	echo "Error en la entrada... ";
    	echo "requistrate ";
    }
  ?>