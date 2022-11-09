<!-- [ content ] Start -->
    <?php if($this->session->flashdata("msg")) : ?>
        <div class="alert alert-dark-primary alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $this->session->flashdata("msg"); ?>
        </div>
    <?php endif; ?>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Productos</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('Products/index'); ?>">Productos</a></li>
            <li class="breadcrumb-item active">Todos</li>
        </ol>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php if ($this->session->userdata('rol') == "Administrador") : ?>
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#addProduct"><i class="feather icon-plus-square"></i> Producto</a>
                </div>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-sm table-striped small">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SKU</th>
                            <th>Descripción</th>
                            <th>Precio Normal</th>
                            <th>Stock</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $p): ?>
                            <tr>
                                <td></td>
                                <td><?=$p->sku;?></td>
                                <td><?=$p->descripcion;?></td>
                                <td><?= '$'.number_format($p->precio_cliente,2,".",",");?></td>
                                <td><?=$p->stock;?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Agregar Productos -->
<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('Products/Add');?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">SKU</label>
                            <input type="text" class="form-control" placeholder="SKU" name="SKU" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="Descripcion" placeholder="Descripcion" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Precio Compra</label>
                            <input type="text" class="form-control" placeholder="Precio Compra" name="Compra" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Precio Cliente</label>
                            <input type="text" class="form-control" placeholder="Precio Cliente" name="PrecioNormal" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Lote</label>
                            <input type="text" class="form-control" placeholder="Lote" name="Lote" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Stock</label>
                            <input type="text" class="form-control" placeholder="Stock" name="Stock" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Cantidad</label>
                            <input type="text" class="form-control" name="Cantidad" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Medida</label>
                            <select class="custom-select" name="Medida" required>
                                <option>Selecciona una medida</option>
                                <option>Pz</option>
                                <option>Kg</option>
                                <option>Lt</option>
                                <option>Ml</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-end mr-3">
                        <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>