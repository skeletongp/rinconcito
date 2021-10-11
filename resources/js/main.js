$("document").ready(function () {
    $('input[type=number]').each(function(){
        $(this).prop('lang','es')
    })
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#discount").on("input", function (e) {
        discount = $("#discount").val();
        discount=discount.substring(1)*10;
        subtotal = $("#subtotal").val();
        subtotal=subtotal.substring(1)*100;
        $("#total").val(parseFloat(subtotal) - discount);
        $("#payed").val($("#total").val());
        $("#spTotal").val('$'+parseFloat($("#total").val()));
        $('#spDesc').val('$'+parseFloat(discount))
        console.log( $('#spDesc').val())
    });

    $("#linkcart").click(function () {
        $("#divcart").toggle("", false);
    });

    $("#makeInvoive").click(function () {
        $("#formInvoice").submit();
    });

    $("#textPhoto").click(function () {
        $("#photo").trigger("click");
    });

    $("#photo").on("input", function () {
        var filename = $("#photo").val().split("\\").pop();
        $("#namePhoto").text(filename);
    });
    $(".money").priceFormat({
        prefix: '$',
       
    });
});
