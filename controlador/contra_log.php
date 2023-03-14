<?php
include('modelo/contra.php');
if(isset($_POST['bt_n1'])){
    $usua = $_POST['usu_1'];
    $contra = $_POST['usu_2'];

    $ope = new  contraseña($usua, $contra);

    $pqr=$ope -> valida();
    if($pqr == true){
        include('vista/paginas/Empresa.php');
    }
    else{
        include('vista/paginas/Inicio_secion.php ');
        echo '<center>contraseña erronea</center>';
    }
}
?>