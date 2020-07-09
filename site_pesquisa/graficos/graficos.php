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

    require("phplot-6.1.0/phplot.php");

    SetFileFormat("png");

    $grafico = new PHPlot(1000,600);
 
    #Indicamos o títul do gráfico e o título dos dados no eixo X e Y do mesmo
    $grafico->SetTitle("Gráfico");
    $grafico->SetXTitle("Idades");
    $grafico->SetYTitle("Quantidades");
     
    

    #Definimos os dados do gráfico
    $dados = array(
            array('Até 30 anos', $quantidades[0]),
            array('Fevereiro', 5),
    );
     
    $grafico->SetDataValues($dados);
      
    #Neste caso, usariamos o gráfico em barras
    $grafico->SetPlotType("bars");
     
    #Exibimos o gráfico
    $grafico->DrawGraph();
?>