<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisa Bem Promotora</title>
    </head>
    <body>
        <h1>Olá</h1>
        <h2>A Bem Promotora está propondo essa rápida pesquisa a fim de conhecer melhor seus clientes</h2>

        <form action="index.php" method="POST">
            1. Qual sua faixa de idade:
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
            2. Qual seu Convênio:
            <div class="radio">
	            <input type="radio" name="convenio" id="convenio1" value="1" checked="">
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
            3. Qual sua faixa salarial:
            <div class="radio">
	            <input type="radio" name="salario" id="salario1" value="1" checked="">
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
            4. Porque você realizou o empréstimo:
            <div class="radio">
	            <input type="radio" name="porque" id="porque1" value="1" checked="">
	            <label for="porque1">Pagar contas</label>
            </div>
            <div class="radio">
	            <input type="radio" name="porque" id="porque2" value="2">
	            <label for="porque2">Reforma da casa</label>
            </div>
            <div class="radio">
            	<input type="radio" name="porque" id="porque3" value="3">
            	<label for="porque3">Compra de carro</label>
            </div>
            <div class="radio">
            	<input type="radio" name="porque" id="porque4" value="4">
            	<label for="porque4">Outras</label>
            </div>

            <input type="submit" value="Enviar">

        </form>
    </body>
</html>
