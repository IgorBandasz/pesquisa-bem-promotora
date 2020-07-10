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
    
    $query="SELECT p.conveniopesq, count(*) as quant from tbpesquisa p group by p.conveniopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $convenios[$cont]=$val['conveniopesq'];
        $quantconv[$cont]=$val['quant'];
        $cont++;
    }

    $query="SELECT salariopesq, count(*) as quant from tbpesquisa p group by p.salariopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $salarios[$cont]=$val['salariopesq'];
        $quantsal[$cont]=$val['quant'];
        $cont++;
    }

    $query="SELECT motivopesq, count(*) as quant from tbpesquisa p group by p.motivopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $motivos[$cont]=$val['motivopesq'];
        $quantmot[$cont]=$val['quant'];
        $cont++;
    }

    for($cont=0; $cont<4; $cont++){
        if($idades[$cont] ==1)
            $idades[$cont] = "Até 30 anos";
        if($idades[$cont] ==2)
            $idades[$cont] = "De 30 a 50 anos";
        if($idades[$cont] ==3)
            $idades[$cont] = "De 50 a 65 anos";
        if($idades[$cont] ==4)
            $idades[$cont] = "Acima de 65 anos";

        if($convenios[$cont]==1)
            $convenios[$cont] ="INSS";
        if($convenios[$cont]==2)
            $convenios[$cont] ="SIAPE";
        if($convenios[$cont]==3)
            $convenios[$cont] ="Forças Armadas";
        if($convenios[$cont]==4)
            $convenios[$cont] ="Outros";

        if($salarios[$cont]==1)
            $salarios[$cont] = "Até 2 SM";
        if($salarios[$cont]==2)
            $salarios[$cont] = "De 2 a 4 SM";
        if($salarios[$cont]==3)
            $salarios[$cont] = "De 4 a 6 SM";
        if($salarios[$cont]==4)
            $salarios[$cont] = "Acima de 6 SM";
            
        if($motivos[$cont]==1)
            $motivos[$cont] = "Pagar contas";
        if($motivos[$cont]==2)
            $motivos[$cont] = "Reforma da casa";
        if($motivos[$cont]==3)
            $motivos[$cont] = "Compra de carro";
        if($motivos[$cont]==4)
            $motivos[$cont] = "Outras";
    }
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