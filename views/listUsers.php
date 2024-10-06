<?php 

  require_once './APIs/connection.php';
  $allUsers = getAllUsers($conn);

?>
<div class="container mt-3">
  <h2>Lista de usuarios <hr></h2>
            
  <table class="table table-dark table-hover">
    <thead class="text-center">
      <tr>
        <th>Id</th>
        <th>Código</th>
        <th>Nombre Completo</th>
        <th>Grupo</th>
        <th>Carrera</th>
        <th>Email</th>
        <th>Tipo de Usuario</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($allUsers as $user) {
      ?>
        <tr>
          <td>
            <?php echo $user['user_id']; ?>
          </td>
          <td>
            <?php echo $user['user_code']; ?>
          </td>
          <td>
            <?php echo $user['first_name'] . " " . $user['last_name'] ; ?>
          </td>
          <td>
            <?php echo $user['std_group']; ?>
          </td>
          <td>
            <?php echo $user['career'];?>
          </td>
          <td>
            <?php echo $user['email']; ?>
          </td>
          <td>
            <?php echo $user['userType']; ?>
          </td>
          <td>
            <div class="d-flex justify-content-around">
              <div>
                <?php 
                  if ($user['userActive']) {
                    echo "<button class='btn btn-outline-success'>Desactivar</button>";
                  }else{
                    echo "<button class='btn btn-outline-warning'>Activar</button>";
                  }
                ?>
              </div>
              <div class="p-1">
                <button class="btn btn-outline-info">Ver</button>
              </div>
            </div>
          </td> 
        </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>



