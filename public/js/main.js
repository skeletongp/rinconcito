/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$("document").ready(function () {
  $("input[type=number]").each(function () {
    $(this).prop("lang", "es");
  });
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  $("#discount").on("input", function (e) {
    discount = $("#discount").val();
    subtotal = $("#subtotal").val();
    $("#total").val(parseFloat(subtotal) - discount);
    $("#payed").val($("#total").val());
    $("#spTotal").val("$" + parseFloat($("#total").val()));
    $("#spDesc").val("$" + parseFloat(discount));
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
  $(".bg-white").each(function () {
    $(this).css("background-color", "white !important");
  });
  $(".confirm").each(function () {
    $(this).click(function (e) {
      e.preventDefault();
      form = $(this).attr('form');
      message = $(this).attr('data-label');
      Swal.fire({
        title: message,
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Continuar",
        cancelButtonText: "Cancelar"
      }).then(function (result) {
        if (result.isConfirmed) {
          $('#' + form).submit();
        } else {
          return false;
        }
      });
    });
  });
});
/******/ })()
;