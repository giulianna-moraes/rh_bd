<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];


    include "conexao1.php";

    $sql = "SELECT * FROM funcionario
    WHERE cpf = '$cpf'
    AND senha = '$senha'";

$resultado = mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado)>0){
        echo "Liberado!";
        echo "<a href='home.html'> Página inicial</a>";
        header('localition: home.html');
    }

    else{
        echo "usuario ou senha invalidos!";
        echo "<a href='index.html'>Voltar</a>";
    }
}
