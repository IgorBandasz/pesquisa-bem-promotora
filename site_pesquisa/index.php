<?php
$conexao=mysqli_connect('localhost','id14266447_root','H[Z8NvvQ9u.tYdj','id14266447_bancodedados');

if(isset($_POST['ja_enviado'])){
    if(isset($_POST['nome'])){
        if(isset($_POST['idade'])){
            if(isset($_POST['convenio'])){
                if(isset($_POST['salario'])){
                    if(isset($_POST['motivo'])){
                        $query="INSERT INTO tbpesquisa (nomepesq, idadepesq, conveniopesq, salariopesq, motivopesq) 
                        values('".$_POST['nome']."','".$_POST['idade']."','".$_POST['convenio']."','".$_POST['salario']."','".$_POST['motivo']."')";
                        $conexao->query($query);
                        if(!$conexao->error){
                            header('Location: /formulario_concluido.php');
                        }
                        unset($_POST['motivo']);
                    }
                    unset($_POST['salario']);
                }
                unset($_POST['convenio']);
            }
            unset($_POST['idade']);
        }
        unset($_POST['nome']);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisa Bem Promotora</title>
        <link rel ="stylesheet" type="text/css" href = "_css/index.css"/>
    </head>
    <body>
        <div id="interface">
            <header id=cabecalho>
                <h2>Olá</h1>
                <h3>A Bem Promotora está propondo essa rápida pesquisa a fim de conhecer melhor seus clientes</h2>
            </header>
            <?php  if(isset($_POST['ja_enviado'])):?>
                <p id="ja_enviado">Preenchimento incorreto do formulário, tente novamente</p>
            <?php  endif;?>

            <form action="index.php" method="POST">
                <input type='hidden' name='ja_enviado' value='1'>
                <p>Nome:</p>
               
                <input type="text" name="nome" id="nome">
                
                <p>1. Qual sua faixa de idade:</p>
                <div class="radio">
	                <input type="radio" name="idade" id="idade1" value="1">
	                <label for="idade1">Até 30 anos</label>
                </div>
                <div class="radio">
	                <input type="radio" name="idade" id="idade2" value="2">
	                <label for="idade2">De 30 a 50 anos</label>
                </div>
                <div class="radio">
                	<input type="radio" name="idade" id="idade3" value="3">
                	<label for="idade3">De 50 a 65 anos</label>
                </div>
                <div class="radio">
                	<input type="radio" name="idade" id="idade4" value="4">
                	<label for="idade4">Acima de 65 anos</label>
                </div>

                <br/>
                <p>2. Qual seu Convênio:</p>
                <div class="radio">
	                <input type="radio" name="convenio" id="convenio1" value="1">
	                <label for="convenio1">INSS</label>
                </div>
                <div class="radio">
	                <input type="radio" name="convenio" id="convenio2" value="2">
	                <label for="convenio2">SIAPE</label>
                </div>
                <div class="radio">
                	<input type="radio" name="convenio" id="convenio3" value="3">
                	<label for="convenio3">Forças Armadas</label>
                </div>
                <div class="radio">
                	<input type="radio" name="convenio" id="convenio4" value="4">
                	<label for="convenio4">Outros</label>
                </div>

                <br>
                <p>3. Qual sua faixa salarial:</p>
                <div class="radio">
	                <input type="radio" name="salario" id="salario1" value="1">
	                <label for="salario1">Até 2 SM</label>
                </div>
                <div class="radio">
	                <input type="radio" name="salario" id="salario2" value="2">
	                <label for="salario2">De 2 a 4 SM</label>
                </div>
                <div class="radio">
                	<input type="radio" name="salario" id="salario3" value="3">
                	<label for="salario3">De 4 a 6 SM</label>
                </div>
                <div class="radio">
                	<input type="radio" name="salario" id="salario4" value="4">
                	<label for="salario4">Acima de 6 SM</label>
                </div>

                <br>
                <p>4. Porque você realizou o empréstimo:</p>
                <div class="radio">
	                <input type="radio" name="motivo" id="porque1" value="1">
	                <label for="porque1">Pagar contas</label>
                </div>
                <div class="radio">
	                <input type="radio" name="motivo" id="porque2" value="2">
	                <label for="porque2">Reforma da casa</label>
                </div>
                <div class="radio">
                	<input type="radio" name="motivo" id="porque3" value="3">
                	<label for="porque3">Compra de carro</label>
                </div>
                <div class="radio">
                	<input type="radio" name="motivo" id="porque4" value="4">
                	<label for="porque4">Outras</label>
                </div>

                <input type="submit"  id="botao" value="Enviar">

            </form>
        </div>
    </body>
</html>
