<?php
echo "<body style='background-color:pink'>";
echo "<center><h1>Dados cadastrados</h1></center>";
echo "<hr>";
echo "<h1>Nome:";echo $_POST['nome'];
echo "<br> <br>";
echo "E-mail:  ";echo $_POST['email'];
echo "<br> <br>";
echo "Celular:  "; echo $_POST['Celular'];
echo "<br> <br>";
echo "Data de Nascimento:  "; echo $_POST['data'];
echo "<br> <br>";
echo "<hr>";
$datadonascimento=$_POST['data'];
list($ano, $mes, $dia) = explode('-', $datadonascimento);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$diadonascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $diadonascimento) / 60) / 60) / 24) / 365.25);
echo 'Você tem '. $idade . ' anos!!';
