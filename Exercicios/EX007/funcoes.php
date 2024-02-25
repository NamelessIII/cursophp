<?php 
$r = base_convert(254, 10, 8);
print("A resposta é $r");
//base_convert(valor, base inicial, base resultado)
?>

<?php 
$r = intdiv(5, 2);
print("A resposta é $r");

//intdiv(valor, divisor) mostra a divisão sem resto
?>

<?php 
$r = max(5, 2, 7,  15, 187);
print("A resposta é $r");

//max(sequencia) mostra o maior valor (também pode ser usado o min)
?>

<?php 
$r = sqrt(16);
print("A resposta é $r");

//raiz quadrada
//também é possivel fazer assim, e cubica +
$r = 27 ** (1/3);
$r = 36 ** (1/4);
?>