<?php
//include "#";


$razaosocial    = $_POST ['razaosocial'];
$cnpj           = $_POST ['cnpj'];
$endereco       = $_POST ['endereco'];
$numero         = $_POST ['numero'];
$complemento    = $_POST ['complemento'];
$cep            = $_POST ['cep'];
$bairro         = $_POST ['bairro'];
$cidade         = $_POST ['cidade'];
$midiasocial    = $_POST ['midiasocial'];
$dtcad          = $_POST ['dtcad'];
$banco          = $_POST ['banco'];
$agencia        = $_POST ['agencia'];
$conta          = $_POST ['conta'];
$fotos          = $_POST ['fotos'];
$leguminosas    = $_POST ['leguminosas'];
$hortalicas     = $_POST ['hortalicas'];
$frutas         = $_POST ['frutas'];
$vegetais       = $_POST ['vegetais'];
$prodvendas     = $_POST ['prodvendas'];
$quemsoueu      = $_POST ['quemsoueu'];


$sql = "insert into (razaosocial, cnpj, endereco, numero, complemento, cep, bairro, cidade, midiasocial, dtcad, banco, agencia, conta, fotos,leguminosas, hortalicas, frutas, vegetais, prodvendas, quemsoueu)
 values ('$razaosocial','$cnpj','$endereco','$numero','$complemento','$cep','$bairro','$cidade','$midiasocial','$dtcad', '$banco','$agencia','$conta',$fotos','$leguminosas','$hortalicas','$frutas','$vegetais','$prodvendas','$quemsoueu')";

$qry = mysqli_query ($con,$sql);
if ($qry) {
    header ('location:confirmacao.php');
    } else {
       echo "<h1> Registro não cadastrado </h1>";
    }