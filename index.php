<?php
    include 'Product.class.php';

    // Profer, nessea parte eu tentei fazer algo para me desafiar, então eu decidi criar um vetor com vários produtos e exibí-los em forma de tabela.

    $produtos = [];

    // Instanciação de 10 objetos "produto" para o vetor "produtos".

    for ($i=0; $i < 10; $i++) { 
        $produtos[$i] = new Produto();
      $produtos[$i]->setDesc("Produto Genérico");
        $produtos[$i]->setPrice("R$" . ($i+1)*($i+1*10) . ".90");
        $produtos[$i]->setId($i+1);
          
    }

    // escrevendo tags html e colocando a descrição e valor dos produtos em forma de tabela

    echo '<div class="table-wrap">
            <table class="table table-light" style="padding: 20px; border-radius: 10px;">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Preço</th>
                </tr>
              </thead>
              <tbody>';

                for ($i=0; $i < 10; $i++) {         
                  echo '<tr>
                    <th scope="row">' . $produtos[$i]->getId() . '</th>
                    <td>'. $produtos[$i]->getDesc() .'</td>
                    <td>'. $produtos[$i]->getPrice() . '</td>
                  </tr>';
                }
            
        echo '</tbody>';
      echo '</table';
    echo '</div>';


    // // Essa parte seria o código "normal" ("sem nenhum desafio").


    // $produto = new Produto();

    // $produto->setDesc("Fone de ouvido JBL");
    // $produto->setPrice("R$40.00");

    // $desc = $produto->getDesc();
    // $price = $produto->getPrice();

    // echo "<p>Descrição: " . $desc . "<br>";
    // echo "<p>Preço: " . $price;

?>

<!-- CSS --->

<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    background: url('circle-scatter-haikei.svg');
    background-size: cover;
    background-repeat: no-repeat;
    
  }
  
  .table-wrap{
    width: 50vw;
  }

</style>

<!-- HTML --->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Produtos</title>
  </head>
  <body>
    
  <!-- Bootstrap JS -->
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>