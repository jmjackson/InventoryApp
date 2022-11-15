<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Ingresos</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('Products/index'); ?>">Productos</a></li>
            <li class="breadcrumb-item active">Ingresos</li>
        </ol>
    </div>
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-sm table-striped small" id="products">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SKU</th>
                            <th>Descripción</th>
                            <th>Precio Normal</th>
                            <th>Stock</th>
                            <th>Precio Compra</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1; foreach($products as $p):?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td><?= $p->sku;?></td>
                                <td><?= $p->descripcion;?></td>
                                <td><?= '$'.$p->precio_cliente;?></td>
                                <td><?= $p->stock;?></td>
                                <td><?= $p->precio_compra;?></td>
                                <td></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>