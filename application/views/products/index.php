<!-- [ content ] Start -->
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
                    <a href="" class="btn btn-sm btn-primary mb-2"><i class="feather icon-plus-square"></i> Producto</a>
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>