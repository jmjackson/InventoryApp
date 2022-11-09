$(document).ready(function(){
    $('#editModal').on('show.bs.modal',function (event){
        var button=$(event.relatedTarget);
        var recipient=button.data('user');
        var base=$('#base').val();
        $('#UserId').val(recipient);
    
         $.ajax({
            method:'POST',
            url:base+'Users/getuser',
            data:{id:recipient},
            dataType:'json',
            success:function(data){
                $('#Name').val(data['name']);
                $('#Email').val(data['email']);
                $('#RolId').val(data['rol']).prop('selected',true);
            },
         });
    });

    $('#passwordModal').on('show.bs.modal',function(event){
        var button=$(event.relatedTarget);
        var recipient=button.data('user');
        $('#IdUser').val(recipient);

    });

    $("#ProductsId").selectize({
        create: true,
        sortField: "text",
      });

    $("#ProductsId").change(function() {
        var product_id=$(this).val();
        var base=$('#base').val();

        $.ajax({
            method:'POST',
            url:base+'Dashboard/getproducts',
            data:{id:product_id},
            dataType:'json',
            success:function(datos) {
                $('#product-title').html(datos['descripcion']);
                $('#product-size').html('Venta por '+datos['medida']);
                $('#product-price').html('precio de venta '+datos['precio_cliente']);
                $('#product-sku').html('SKU '+datos['sku']);
                $('#PrecioCliente').val(datos['precio_cliente']);
                $('#Stock').val(datos['stock']);
                
            }
        });   
    });

    // $("#Amount").change(function(){
    //     alert("The text has been changed.");
    //   }); 
});

