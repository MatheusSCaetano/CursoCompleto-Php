										
<?php 

											/* Arrays (Matriz)*/ 
/* Ao invés de declarar várias variáveis para dados do mesmo tipo, cria-se uma matriz que irá comportar várias alocações de dados.  */ 





/*$nome = array('Guilherme','Matheus', 'David' );  /* Declarando os valores da matriz   */

/* echo $nome[0];  Para buscar um determinado dado de uma matriz é necessário especificar a "casa" em que está alocado  */ 




?>		

<?php  
//A forma mais recente de declaração de matriz é:

/*$variáeis = ['João', 'Mauro', ' Paulo'];

echo $variáeis[0]. ''. $variáeis[1] .''. $variáeis[2];

?>	

<?php
 Posso declarar dados de tipos diferentes dentro da memsma array.  							

$diferentes = array('João',150, True, 10.7);

echo $diferentes[3]; 
?>  

<?php 
/*        Também há como utilizar 'str' dentro do índice para definir as variáeis dentro da array.  */  

$informacao['nome'] = 'João';
$informacao['idade'] = 25;
$informacao['cidade'] = 'Cuiabá';

echo 'Nome: '.$informacao['nome'];
echo '<br />';
echo 'Idade: '.$informacao['idade'];
echo '<br />';
echo 'Cidade: '.$informacao['cidade'];
 ?>