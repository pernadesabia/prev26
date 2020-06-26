$(document).ready(function() {

$(".maskcpf").mask('000.000.000-00', {reverse: true});
$('.masktelefone').mask('(00)0000-0000');
$('.maskcelular').mask('(00)00000-0000');
$(".maskdinheiro").mask("##0,00", {reverse: true});
$(".maskdinheiroponto").mask("000.000.000.000.000,00", {reverse: true});
$('.maskcep').mask('00000-000');
$('.maskdata').mask('00/00/0000');
$('.masktelsemarea').mask('0 0000-0000', {reverse: true});

});