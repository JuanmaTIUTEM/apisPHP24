<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)" onclick="ppal();">Principal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)" onclick="addU();">Agregar Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)" onclick="listUsers();">Lista de Usuarios</a>
        </li>
        
      </ul>
      <form class="d-flex" method="GET" action="./APIs/find.php">
        <input class="form-control" type="text" placeholder="Usuario" id="findUser" name="findUser">
        <button class="btn btn-primary" type="submit" name="option" value="findUser">Buscar</button>
      </form>
    </div>
  </div>
</nav>