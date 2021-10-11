/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$("document").ready(function () {
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  $('#discount').on('input', function (e) {
    discount = $('#discount').val();
    subtotal = $('#subtotal').val();
    $('#total').val(parseInt(subtotal) - parseInt(discount));
    $('#payed').val($('#total').val());
  });
  $('#linkcart').click(function () {
    $('#divcart').toggle('', false);
  });
  $('#makeInvoive').click(function () {
    $('#formInvoice').submit();
  });
  $('#textPhoto').click(function () {
    $('#photo').trigger('click');
  });
  $('#photo').on('input', function () {
    var filename = $('#photo').val().split('\\').pop();
    $('#namePhoto').text(filename);
  });
});
/******/ })()
;