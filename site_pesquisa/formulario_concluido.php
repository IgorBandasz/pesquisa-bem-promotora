<?php
    $conexao=mysqli_connect('localhost','id14266447_root','H[Z8NvvQ9u.tYdj','id14266447_bancodedados'); 
    
    $quantidades=[ ];
    $quantconv=[ ];
    $quantsal=[ ];
    $quantmot=[ ];
    for($cont=0; $cont<4; $cont++){
        $quantidades[]=0;
        $quantconv[]=0;
        $quantsal[]=0;
        $quantmot[]=0;
    }

    $query="SELECT count(*) as quant from tbpesquisa p group by p.idadepesq order by p.idadepesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $quantidades[$cont]=$val['quant'];
        $cont++;
    }
    
    $query="SELECT count(*) as quant from tbpesquisa p group by p.conveniopesq order by p.conveniopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $quantconv[$cont]=$val['quant'];
        $cont++;
    }

    $query="SELECT count(*) as quant from tbpesquisa p group by p.salariopesq order by p.salariopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $quantsal[$cont]=$val['quant'];
        $cont++;
    }

    $query="SELECT count(*) as quant from tbpesquisa p group by p.motivopesq order by p.motivopesq;";
    $resultado=mysqli_query($conexao,$query);

    $cont=0;
    while($val=mysqli_fetch_array($resultado)){
        $quantmot[$cont]=$val['quant'];
        $cont++;
    }

    $idades[0] = "Até 30 anos";
    $idades[1] = "De 30 a 50 anos";
    $idades[2] = "De 50 a 65 anos";
    $idades[3] = "Acima de 65 anos"

    $convenios[0] ="INSS";
    $convenios[1] ="SIAPE";
    $convenios[2] ="Forças Armadas";
    $convenios[3] ="Outros"

    $salarios[0] = "Até 2 SM";
    $salarios[1] = "De 2 a 4 SM";
    $salarios[2] = "De 4 a 6 SM";
    $salarios[3] = "Acima de 6 SM";
    
    $motivos[0] = "Pagar contas";
    $motivos[1] = "Reforma da casa";
    $motivos[2] = "Compra de carro";
    $motivos[3] = "Outras";
    

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
    <h3>Idades:</h3>
    <?php for($cont=0; $cont<4; $cont++): ?>
        <div><?php echo $quantidades[$cont]; echo $idades[$cont];?></div>
    <?php endfor; ?>

    <h3>Convenios:</h3>
    <?php for($cont=0; $cont<4; $cont++): ?>
        <div><?php echo $quantconv[$cont]; echo $convenios[$cont];?></div>
    <?php endfor; ?>

    <h3>Salarios:</h3>
    <?php for($cont=0; $cont<4; $cont++): ?>
        <div><?php echo $quantsal[$cont]; echo $salarios[$cont];?></div>
    <?php endfor; ?>

    <h3>Motivos:</h3>
    <?php for($cont=0; $cont<4; $cont++): ?>
        <div><?php echo $quantmot[$cont]; echo $motivos[$cont];?></div>
    <?php endfor; ?>
</body>
</html>