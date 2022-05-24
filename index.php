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

<?php
    include 'Product.class.php';

    $produtos = [];

    for ($i=0; $i < 10; $i++) { 
        $produtos[$i] = new Produto();
      $produtos[$i]->setDesc("Produto Genérico");
        $produtos[$i]->setPrice("R$" . ($i+1)*($i+1*10) . ".90");
        $produtos[$i]->setId($i+1);
          
    }

    echo '<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Produtos</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
        </head>';

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

?>
