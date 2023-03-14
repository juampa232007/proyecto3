<?php
include('vista/formulario/menu_form/menu_form.php');
?>


<br><br><br><br><br><br><br><br><br>

      
<center>
 
<table border="2" class="tab">
<tr>
<th colspan="11">Trabajadores
</th>
</tr> 
<tr class="puntos">
            <th>#</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Seguro</th>
            <th>Edad</th>
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







  <!--formulario-->
  <br><br><br>
 
  <form action="?option=log_form"  method="POST">
  <div class="row g-2">
  <div class="col-md">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="Nombre y apellido" name="nam_t1" >
  </div>
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Edad" aria-label="Edad" name="eda_t1">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Estado medico" aria-label="Estado medico" name="esta_t1">
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid" name="emm">Email address</label>
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
      <label for="floatingSelectGrid" name="area_t1">Elegir el cargo</label>
      
    </div>
  </div>
  <input class="botons" type="submit" value="Registrar" name="bton">
</div>
  </form>

  <br>
