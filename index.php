<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisa</title>
  </head>
  <body>
    <?php 

      $pesquisa = $_POST['busca'] ?? '';

      include "conexao.php"; 

      $sql = "SELECT * FROM lista WHERE pessoa LIKE '%$pesquisa%' ";
      $dados = mysqli_query($conn, $sql);

      ?>
    <div class = "container">
      <div class = "row">
        <div class = "col">
          <h1>Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="input-group" action="index.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
              </tr>
            </thead>
            <tbody>

                <?php

                while ($linha = mysqli_fetch_assoc($dados) ) {
                  $nome = $linha['pessoa'];
                  $numero = $linha['numero'];

                  echo "<tr>
                          <th scope='row'>$nome</th>
                          <td>$numero</td>
                        </tr>";
                }

              ?>

            </tbody>
          </table>
        </div>
      </div>   
    </div>

    <!-- Modal -->




    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
