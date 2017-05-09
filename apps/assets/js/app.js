$(document).on("click", ".ref-modal-pulsa", function () {
     var newId = $(this).data('id');
     $(".modal-body #kode-ref ").html( newId );
     $("#kode-pulsa-post ").val( newId );

});