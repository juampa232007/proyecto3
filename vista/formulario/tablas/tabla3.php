<?php
include('vista/formulario/menu_form/menu_form.php');
?>

<br><br><br><br><br><br><br><br><br>
      
      <center>
 
      <table border="1" class="tab">
      <tr>
        <th colspan="11" class="titulo">SSG-ST
        </th>
    </tr> 
        <tr class="puntos">
        <th></b>#</th>
            <th action=""></b>Nombre</th><?php ?>
            <th></b>Cargo</th>
            <th></b>Seguro</th>
            <th><b>Edad</b></th>
        </tr>
        <tr>
          <td>1</td>
          <td >?</td>
          <td>Na</td>
          <td>Na</td>
          <td>Na</td>
        </tr>
        <tr>
          <td>2</td>
          <td >?</td>
          <td>Na</td>
          <td>Na</td>
          <td>Na</td>
        </tr>
        <tr>
        <tr>
          <td>3</td>
          <td >?</td>
          <td>Na</td>
          <td>Na</td>
          <td>Na</td>
        </tr>
        <tr>
          <td>4</td>
          <td >?</td>
          <td>Na</td>
          <td>Na</td>
          <td>Na</td>
 
        </tr>
    </table>

  

    <br><br><br>
  <form action=""  method="post">
  <div class="row g-2">
  <div class="col-md">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="Nombre y apellido">
  </div>
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Edad" aria-label="Edad">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Estado medico" aria-label="Estado medico">
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Cargo</option>
        <option value="1">Gerente</option>
        <option value="2">Servicio al cliente</option>
        <option value="3">Etc</option>
      </select>
      <label for="floatingSelectGrid">Elegir el cargo</label>
      
    </div>
  </div>
  <input class="botons" type="submit" value="Registrar">
</div>
  </form>






  <br>
  