<?php 
include 'views/header.php';
include 'views/menu.php';
?>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vista de Usuarios</h5>              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col">Ultima Conexion</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($this->datos as $user){?>
                  <tr>
                    <th scope="row"><a type="button" class=" btn btn-sm" id="<?php echo $user['id']?>_id" data-bs-target="#userModal"  ><?php echo $user["id"] ?></a> </th>
                    <!-- <th scope="row"><?php echo $user['id']; ?></th> -->
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['user_name']; ?></td>
                    <td><?php echo $user['date_created']; ?></td>
                    <td><?php echo $user['last_con']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered ">

            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=" contenedor modal-body position-relative">

                    <div id="son" class="son p-5 position-absolute ">
                        <div class="text-center p-4">
                            <div class="spinner-border m-5 text-primary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                <form class="needs-validation" action="<?php echo constant('URL')?>upuser" method="POST" novalidate>
                    <div class="row">
                                    <div class="col-12">
                                        <label>Nombre:</label>
                                        <input class="form-control" name="name" type="text" id="name" readonly required>
                                        <div class="invalid-feedback">Ingrese una nombre valido.</div>
                                    </div>

                                </div>
                        <div class="row">
                                    <div class="col-6">
                                        <label>id:</label>
                                        <input class="form-control" name="id" type="text" id="id" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label>Nombre de usuario:</label>
                                        <input class="form-control" type="text" id="user_name" readonly>
                                    </div>
                                </div>
                        <div class="row">
                                    <div class="col-12">
                                        <label>Correo:</label>
                                        <input class="form-control" name="email" type="email" id="email" readonly required>
                                        <div class="invalid-feedback">Ingrese una cuenta de correo valida.</div>
                                    </div>
                                    
                        </div>
                        <div class="row">
                        <div class="col-6">
                                        <label>Fecha de Creacion:</label>
                                        <input class="form-control" type="text" id="date_to" readonly>
                                    </div>
                            <div class="col-6">
                                <label>Ultimo Logeo:</label>
                                <input class="form-control" type="text" id="last_login" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="edit" type="button" class="btn btn-secondary">Editar</button>
                        <button id="save" type="submit" class="btn btn-primary" disabled>Guardar</button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>


<?php
include 'views/footer.php'; 