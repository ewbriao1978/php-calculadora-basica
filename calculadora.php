<?php
// exemplo 
$parcela1=$_POST['par1'];
$parcela2=$_POST['par2'];
$operacao=$_POST['operacao'];

$resultado = 0;

echo "Operação:".$operacao;
echo "<br>";

switch($operacao){
    case 'soma':
        $resultado=$parcela1+$parcela2;
        break;
    case 'subtracao':
        $resultado=$parcela1-$parcela2;
        break;
    case 'multiplicacao':
        $resultado=$parcela1*$parcela2;
        break;
    case 'divisao':
        $resultado=$parcela1/$parcela2;
        break;
        
}


echo "A operação ".$operacao." dos valores ".$parcela1." e ".$parcela2." é : ".$resultado;

echo "<br>";

echo "<h1> Funciona! </h1>";

echo "<br>";

echo "<a href='http://localhost:8080/calculadora.html'> Voltar! </a>"; 


?>