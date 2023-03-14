
<?php

    $opcion = "inicio";
    if(!isset($_GET["opcion"])){
        //Llamar informacion de la pagina inicial
        include('plantilla/inicio.php');
    }
    
    //Fin inicio
    else{
      
        if($_GET["opcion"]=='mision'){
            //Llamar pagina 1
            include('vista/paginas/mision.php');
        }//Fin de la opcion 1
        if($_GET["opcion"]=='formulario'){
            //Llamar pagina 1
            include('vista/formulario/formulario.php');
        }//Fin de la opcion 1
        if($_GET["opcion"]=='menu_form'){
            //Llamar pagina 1
            include('vista/formulario/menu_form/menu_form.php');
        }//Fin de la opcion 1
        /*fdff*/
        if($_GET["opcion"]=='tabla1'){
            //Llamar pagina 1
            include('vista/formulario/tablas/tabla1.php');
        }//Fin de la opcion 1
        if($_GET["opcion"]=='tabla2'){
            //Llamar pagina 1
            include('vista/formulario/tablas/tabla2.php');
        }//Fin de la opcion 1
        if($_GET["opcion"]=='tabla3'){
            //Llamar pagina 1
            include('vista/formulario/tablas/tabla3.php');
        }//Fin de la opcion 1
        if($_GET["opcion"]=='tabla4'){
            //Llamar pagina 1
            include('vista/formulario/tablas/tabla4.php');
        }//Fin de la opcion 1
        if($_GET['opcion']=='contacto'){
            include('vista/paginas/opinion.php');
        }


        if($_GET['opcion']=='sesion'){
            include('vista/paginas/Inicio_secion.php');
        }
        if($_GET['opcion']=='Empresa'){
            include('vista/paginas/Empresa.php');
            
        }
        if($_GET['opcion']=='MySQL'){
            include('vista/formulario/MySQL.php');
        }
        if($_GET['opcion']=='resolucion'){
            include('vista/paginas/resolucion.php');
        }
        if($_GET['opcion']=='log_con'){
            include('controlador/contra_log.php');
        }
        if($_GET['opcion']=='log_form'){
            include('controlador');
        }
    }
    
      
      
?>       

