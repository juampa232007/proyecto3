<?php
include('vista/formulario/menu_form/menu_form.php');
?>
<br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
<div class="mys">
<img src="imagenes/base_mysql.jpeg" class="img-fluid imgm" alt="...">
<img src="imagenes/base_mysql1.jpeg" class="img-fluid imgm" alt="...">
</div>

<center>
<div class="accordion mysq" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        CREACION DE BASE DATOS
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>CREATE DATABASE TRANSFORMANDO_ASESORIAS;</strong> 
        <br>
    CREATE TABLE empresas(
    p_empre INT AUTO_INCREMENT,
    Empleado VARCHAR(30),
    Area_empre VARCHAR(30),
    Nombre_empre VARCHAR(30),
    PRIMARY KEY (p_empre)
);
<br>
CREATE TABLE  Arl(
    p_arl INT  AUTO_INCREMENT, 
    Tipo_ries VARCHAR(20), 
    Nombre_arl VARCHAR(25),
    f_empre INT,
    PRIMARY KEY (p_arl)
);
<br>
CREATE TABLE empre_servi(
    P_empre_servi INT  AUTO_INCREMENT, 
    Nombre_empre_servi VARCHAR(20),
    f_empre INT,
    f_servi INT,
    PRIMARY KEY(P_empre_servi)
);
<br>
CREATE TABLE servicio_gestión(
    p_servi INT  AUTO_INCREMENT,
    nombre_servi VARCHAR(30),
    Tipo_servi VARCHAR(25),
    PRIMARY KEY (p_servi)
);
<br>
CREATE TABLE administrador( 
    P_admi INT  AUTO_INCREMENT,
    Nombre_admi VARCHAR(30),
    f_servi INT,
    PRIMARY KEY (p_admi)
);

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        CREACION DE RELACION
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      ALTER TABLE empresa ADD CONSTRAINT regula 
FOREIGN KEY (f_empre) REFERENCES Arl(p_arl);
<br>
ALTER TABLE servicio_gestión ADD CONSTRAINT maneja
FOREIGN KEY (f_servi) REFERENCES administrador(p_admi);
<br>
ALTER TABLE empresa ADD CONSTRAINT tiene
FOREIGN KEY (f_empre) REFERENCES empre_servi(P_empre_servi);
<br>
ALTER TABLE servicio_gestión ADD CONSTRAINT tiene
FOREIGN KEY (f_servi) REFERENCES empre_servi(P_empre_servi);
    </div>
  </div>
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
  <center>
  <button class="btn btn-primary ca" type="button"><a href="documento/Documento_escrito.pdf" target="_back" class="bta">Descarga pdf planteamieto de el problema</a></button>
  </center>
</div>
</center>
 <br><br>
<center>
<img src="imagenes/Diagrama_asesorias.png" class="img_di" alt="">
</center>
<?php
include('plantilla/footer.php');
?>