<?php 

  require_once './APIs/connection.php';
  $allUsersTypes = getAllTypes($conn);


?>

<form action="./APIs/insert.php" method="POST">
  <div class="d-flex flex-column">
    <div class="input-group mt-2">
      <span class="input-group-text">Nombre Completo:</span>
      <input type="text" class="form-control" name="first_name"  id="first_name"   placeholder="Nombre">
      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos">
    </div>

    <div class="input-group mt-2">
      <span class="input-group-text">Email:</span>
      <input type="email" class="form-control" name="email"  id="email"   placeholder="email">
      <span class="input-group-text">Teléfono:</span>
      <input type="text" class="form-control" name="phone"  id="phone"   placeholder="Teléfono de contacto">
    </div>
    <div class="input-group mt-2">
      <div class="w-25">
        <span class="input-group-text">#Trabajador/#Ctrl:</span>
        <input type="text" class="form-control" name="phone"  id="phone"   placeholder="Clave usuario">
      </div>
      <div class="w-75">
        <span class="input-group-text">Tipo de Usuario:</span>
        <select class="form-control" id="usersTypes" name="usersTypes" onchange="opType();">
            <option value="0">Seleccione una opción...</option>
            <?php 
              foreach($allUsersTypes as $type){
            ?>
              <option value="<?php echo $type['userTypeId']; ?>"><?php echo $type['userType']; ?></option>
            <?php
              }
            ?>
        </select>
      </div>
        
    </div>

    <div class="d-flex flex-column" id="typeAdmin" style="display:none;">
        <div class="input-group mt-2">
            <span class="input-group-text">Departamento:</span>
            <input type="text" class="form-control" name="department" id="department" placeholder="Departamento" disabled>
            <span class="input-group-text">Dependencia:</span>
            <input type="text" class="form-control" name="dependence" id="dependence" placeholder="Dependencia" disabled>
        </div>
    </div>

    <div class="d-flex flex-column" id="typeStd" style="display:none;">
        <div class="input-group mt-2">
            <span class="input-group-text">Grupo:</span>
            <input type="text" class="form-control" name="groupStdnt" id="groupStdnt" placeholder="Grupo" disabled>
            <span class="input-group-text">Carrera:</span>
            <input type="text" class="form-control" name="career" id="career" placeholder="Carrera" disabled>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-info mt-2">Guardar</button>
    </div>
  </div>
</form>
