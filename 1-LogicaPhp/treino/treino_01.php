<?php 
/*

$name = 'Matheus Silva Caetano';
$idade = 15;
$cidade = 'Cuiabá';
$maior_idade = 18;

echo 'Nome: '. $nome;
echo '<br />';
echo 'Idade: '. $idade;
echo'<br />';
echo 'cidade: '. $cidade;
echo'<br />';
echo 'Possui maior idade? '. $idade >= $maior_idade;
*/

?>


<?php  
/*
$info_matheus = array('Matheus Silva Caetano', 21,'Cuiabá');

echo 'Nome: '. $info_matheus[0];
echo'<br />';
echo 'Idade: '. $info_matheus[1];
echo'<br />';
echo 'Cidade: '. $info_matheus[2];
*/
?>

<?php 
/*

$info_matheus['nome'] = 'Matheus Silva Caetano';
$info_matheus['idade'] = 21;
$info_matheus['cidade'] = 'Cuiabá';
$maior_idade = 18;

echo 'Nome; '. $info_matheus['nome'];
echo'<br />';
echo 'Cidade: '. $info_matheus['cidade'];
echo'<br />';
echo 'Idade: '. $info_matheus['idade'];
echo'<br />';
echo 'Maior de idade: '. $info_matheus['idade'] >= $maior_idade; 

*/



?>
<?php
/*

$info = array('João', 21, 'Cuiabá','07785581185');

echo 'Name: '.$info[0];
	echo'<br />';
echo 'Yers: '.$info[1];
	echo'<br />';
echo 'City from: '.$info[2];
	echo'<br />';
echo 'CPF: '.$info[3];	

*/
 ?> 

 <?php 
$alunos=array('Matheus','João','Guilherme','César');
$notas_finais=array(4.5, 3.7, 7.5,8.3);

for ($contador=0; $contador < 4 ; $contador++){ 
	
	if ($notas_finais[$contador] < 4) {
			echo 'Aluno: ', $alunos[$contador];
			echo '<br />';
			echo 'Nota:', $notas_finais[$contador];
			echo '<br />';
			echo 'Aluno reprovado';
			echo '<hr>';
	}
	else if ($notas_finais[$contador] > 7) {
		echo 'Aluno: ', $alunos[$contador];
		echo '<br />';
		echo 'Nota: ', $notas_finais[$contador];
		echo '<br />';
		echo 'Aluno aprovado';
		echo '<hr>';
	}
	else{
		echo 'Aluno: ', $alunos[$contador];
		echo '<br />';
		echo 'Notas: ', $notas_finais[$contador];
		echo '<br />';
		echo 'Aluno de Recuperação';
		echo '<hr>';
	}

}


?>