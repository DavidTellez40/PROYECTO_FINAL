<html>

<head>
    <title>Eliminar usuarios</title>
</head>

<body>
    <?php
$mascotisados = mysqli_connect("localhost", "root", "",
"mascotisados") or
die("Problemas con la conexión");
$registros = mysqli_query($mascotisados, "select email
from usuarios
where email='$_REQUEST[email]'") or
die("Problemas en el select:" .
mysqli_error($mascotisados));
if ($reg = mysqli_fetch_array($registros)) {
mysqli_query($mascotisados, "delete from usuarios
where email='$_REQUEST[email]'") or
die("Problemas en el select:" .
mysqli_error($mascotisados));
echo  '<script type="text/javascript">
alert(" Se efectuó el borrado del usuario seleccionado.");
window.location.href="eliminar_usuarios.html";
</script>';"";
} else {

echo  '<script type="text/javascript">
alert("No existe el usuario buscado.");
window.location.href="eliminar_usuarios.html";
</script>';"";        

}
mysqli_close($mascotisados);
echo  '<script type="text/javascript">
alert(" Se efectuó el borrado del usuario seleccionado.");
window.location.href="eliminar_producto.html";
</script>';"";

?>
</body>

</html>