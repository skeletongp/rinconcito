$("document").ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#discount').on('input',function(e){
      discount=$('#discount').val();
      subtotal=$('#subtotal').val();
      $('#total').val(parseInt(subtotal)-parseInt(discount));
      $('#payed').val( $('#total').val());
    })
    $('#linkcart').click(function(){
        $('#divcart').toggle('',false);
    })

    $('#makeInvoive').click(function(){
        $('#formInvoice').submit();
    })
});
