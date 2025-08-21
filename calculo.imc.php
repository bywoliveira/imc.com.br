<?php
 $nome = $_POST['nome'];
 $idade = $_POST['idade'];
 $altura = $_POST['altura'];
 $peso= $_POST['peso'];
 $imc= $peso/($altura*$altura);
 echo "$nome você está com  $idade  anos  e seu imc é: ".round($imc,2)." <br>";
 if($imc <=18.5 ){
    echo "Magreza";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png' width='500' height='500'>";
 }
 if($imc >18.5 && $imc <=24.9){
    echo "Peso normal<br>";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png'
    // width='500' height='400'>";
 }
 if($imc >=25.0 && $imc <=29.9){
    echo "Sobrepeso<br>";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png'
    // width='500' height='400>";
 }
 if($imc >=30 && $imc<=34.9){
    echo "Obesidade Grau 1<br>";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png'
    // width='500' height='400>";
 }
 if($imc >=35.0 && $imc <=39.9){
    echo "Obesidade Grau 2<br>";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png'
    // width='500' height='400>";
 }
 if($imc >=40.0){
    echo "Obesidade Grau 3<br>";
    echo"<img src='https://dr.maurojacome.com.br/wp-content/uploads/2024/07/escala-de-IMC-1024x576.png'>
    // width='500' height='400";
 }
?>