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
});

