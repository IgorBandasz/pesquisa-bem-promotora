<?php
    $conexao=mysqli_connect('localhost','id14266447_root','H[Z8NvvQ9u.tYdj','id14266447_bancodedados'); 
    $query="SELECT idadepesq, count(*) as quant from tbpesquisa p group by p.idadepesq;";

    $resultado=mysqli_query($conexao,$query);

    $cont=0;

    while($val=mysqli_fetch_array($resultado)){
        $idades[$cont]=$val['idadepesq'];
        $quantidades[$cont]=$val['quant'];
        $cont++;
    }
    print_r($idades);
    print_r($quantidades);
/*
    SetFileFormat("png");
 
    #Indicamos o títul do gráfico e o título dos dados no eixo X e Y do mesmo
    $grafico->SetTitle("Gráfico");
    $grafico->SetXTitle("Idades");
    $grafico->SetYTitle("Quantidades");
     
    

    #Definimos os dados do gráfico
    $dados = array(
            array('Janeiro', 10),
            array('Fevereiro', 5),
            array('Março', 4),
            array('Abril', 8),
            array('Maio', 7),
            array('Junho', 5),
    );
     
    $grafico->SetDataValues($dados);
      
    #Neste caso, usariamos o gráfico em barras
    $grafico->SetPlotType("bars");
     
    #Exibimos o gráfico
    $grafico->DrawGraph();*/
?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário concluído</title>
</head>
<body>
    <h1>O seu formulário foi enviado com sucesso</h1>
    


</body>
</html>