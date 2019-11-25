<?php 
    //Conecta ao banco de dados
    include("conecta.php");
    //Recebe os dados via POST
    $nome = $_POST['nome'];
    $estadocivil = $_POST['estadocivil'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $sql= "INSERT INTO cliente(nome,estado_civil,sexo,cpf,celular,email,data_nascimento) VALUES ('$nome','$estadocivil','$sexo','$cpf','$celular','$email','$datanascimento')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Cliente cadastrado com sucesso!');
          window.location.href='cadastro.php';
          </script>";
      }else{
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível cadastrar esse cliente!');
          window.location.href='cadastro.php';
          </script>";
      }
?>