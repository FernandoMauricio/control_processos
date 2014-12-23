<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Processo Seletivo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<h3>Processos Seletivos - Senac AM</h3>
    <div class="bs-example">
    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Número do Processo</th>
                        <th>Abertura das Inscrições</th>
                        <th>Encerramento das Inscrições</th>
                        <th>Objetivo</th>
                        <th>Ação</th>
                      </tr>
                    </thead>
                    <tbody>

                       <?php

include ('inc/abreConexao.php');

        $sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') as dataCadastroAM, DATE_FORMAT(data_encer, '%d/%m/%Y') as dataCadastroAM2 FROM processo where status = 1 ORDER BY id DESC";

              $resultado = mysql_query($sql);

              while($linha = mysql_fetch_array($resultado))


       {

              $idprocesso = $linha['id'];



                      echo '<tr>';
                      echo      '<td>'.$linha['numeroEdital'].'</td>';
                      echo      '<td>'.$linha['dataCadastroAM'].'</td>';
                      echo      '<td>'.$linha['dataCadastroAM2'].'</td>';
                      echo      '<td>'.$linha['objetivo'].'</td>';
                      echo      "<td><a button type='button' class='btn btn-primary' href=detalhes.php?id=$idprocesso>Saiba mais</button></a></td>";




                      echo '</tr>';

            //print_r($linha);

        }

        include ('inc/fechaConexao.php');
?>


                    </tbody>
                  </table>
                </div>
    </table>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>