<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <?php if($this->session->flashdata("msg")) : ?>
        <div class="alert alert-dark-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $this->session->flashdata("msg"); ?>
        </div>
    <?php endif; ?>
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="<?= base_url('Dashboard/Ventas'); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="hidden" id="base" value="<?= base_url(); ?>">
                            <label for="">Escoja un producto</label>
                            <select name="ProductId" id="ProductsId" class="form-control form-select select" required>
                                <option value="">Selecciona un Producto</option>
                                <?php foreach ($products as $p) : ?>
                                    <option value="<?= $p->id ?>"><?= $p->descripcion; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" id="PrecioCliente" name="precio-cliente" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Cantidad</label>
                            <input type="number" step="0.01" class="form-control" min="0" name="Cantidad" id="Amount" value="0" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="card text-left">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <h6 class="card-title" id="product-sku"></h6>
                                        <h4 class="card-title" id="product-title"></h4>

                                    </div>

                                    <p class="card-text d-flex justify-content-around">
                                        <span id="product-size" class="d-flex justify-content-start"></span>
                                        <span id="product-price" class="d-flex justify-content-end"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-1">
                        <button type="submit" class="btn btn-sm btn-primary">Descontar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- [ content ] End -->