<?php
//Captura as variaveis do html para php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$matricula = $_POST['matricula'];
$hora = $_POST['hora'];
$pessoas = $_POST['pessoas'];
$reserva = $_POST['reserva'];
$reset = $_POST['reset'];

if ($nome == "")
{
echo "O campo NOME não foi preenchido!!";
}

if ($telefone == "")
{
echo "O campo NOME não foi preenchido!!";
}

//unir as infos da reserva para enviar email
$mensagem = "Nome: ".$nome. 
            "Endereço: ".$endereco.
            "Cidade: ".$cidade.
            "Estado: ".$estado.
            "Telefone: ".$telefone.
            "RG: ".$rg.
            "Celular: ".$celular.
            "Matricula: ".$matricula.
            "Hora: ".$hora.
            "Pessoas: ".$pessoas;

//comando MAIL (envio de arquivos)
mail("josegabrielsouzacastro@gmail.com",
     "Formulário de Reserva",
      $mensagem);

//mensgaem de confirmação 
echo "Dados enviados com sucesso... Em breve entraremos em contato.";
            
?>



















?>