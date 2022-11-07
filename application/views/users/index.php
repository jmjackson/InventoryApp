<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Usuarios</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('Users/index'); ?>">Usuarios</a></li>
            <li class="breadcrumb-item active">Todos</li>
        </ol>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-primary mb-2"><i class="feather icon-plus-square"></i> Usuario</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-sm table-striped small">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                        foreach ($usuarios as $u) : ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td><?= $u->name; ?></td>
                                <td><?= $u->email; ?></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#editModal" data-user="<?=$u->id;?>" class="text-warning ml-1" title="Actualizar Datos"><i class="feather icon-edit h6"></i></a>
                                    <a href="" data-toggle="modal" data-target="#passwordModal" data-user="<?=$u->id;?>" class="text-dark ml-1" title="Actualizar Password"><i class="feather icon-toggle-left h6"></i></a>
                                    <a href="" data-toggle="modal" data-target="#deleteModal" data-user="<?= $u->id;?>" class="text-danger ml-1" title="Borrar Usuario"><i class="feather icon-trash-2 h6"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="base" value="<?=base_url();?>">

<!-- Agregar usuario -->

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('Users/add');?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre Completo" name="Name" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo Electrónico" name="Email" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña" name="Password" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="Rol" class="form-control" required>
                                <option value="Usuario">Usuario</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-sm ml-1 btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-sm ml-1 btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Actualizar Datos Modal -->
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('Users/updateuser');?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="hidden" id="UserId" name="UserId" value="">
                            <input type="text" class="form-control" id="Name" name="Name" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="Email" name="Email" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="Rol" id="RolId" class="form-control" required>
                                <option value="">Selecciona una Opción</option>
                                <option value="Usuario">Usuario</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-sm ml-1 btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-sm ml-1 btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Eliminar Usuario -->
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre Completo" name="Name" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo Electrónico" name="Email" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña" name="Password" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="Rol" class="form-control" required>
                                <option value="Usuario">Usuario</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-sm ml-1 btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-sm ml-1 btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Actualizar Password Usuario -->
<!-- Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?=base_url('Users/updatepassword');?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="hidden" value="" name="UserId" id="IdUser">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control"  name="Password" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-sm ml-1 btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-sm ml-1 btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>