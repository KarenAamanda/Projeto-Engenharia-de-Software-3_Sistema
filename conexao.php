<?php
$HOST = 'localhost';
$USUARIO = 'root';
$SENHA = '';
$DB = 'db_bioconcept';

$conexao = new mysqli($HOST, $USUARIO, $SENHA, $DB);

/*if($conexao->connect_errno){
    echo "erro"
}
else{
    echo "conexao feita"
}*/

?>