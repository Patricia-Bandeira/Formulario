<?php

echo "<h1>Dados cadastrados</h1>";
echo "<hr>";
echo "Nome:  ";echo $_POST['nome'];
echo "<br> <br>";
echo "E-mail:  ";echo $_POST['email'];
echo "<br> <br>";
echo "Celular:  "; echo $_POST['Celular'];
echo "<br> <br>";
echo "Data de Nascimento:  "; echo $_POST['dia']; echo "/"; echo $_POST['mes']; echo "/";echo $_POST['ano'];
echo "<br><br>";

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$diadonascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $diadonascimento) / 60) / 60) / 24) / 365.25);

echo "<hr>";
echo 'Você tem '. $idade . ' anos!!';
echo "<hr>";

