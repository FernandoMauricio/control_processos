<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Processos Seletivos</title>

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

  <h2>Detalhes - Processos Seletivos</h2><br>




  <?php

                include ('inc/abreConexao.php');

                  $sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') as dataCadastroAM, DATE_FORMAT(data_encer, '%d/%m/%Y') as dataCadastroAM2 FROM processo WHERE id=$_GET[id]";
                  $query = mysql_query($sql);
                  while($sql = mysql_fetch_array($query)){

                  $idprocesso   = $sql['id'];
                  $numeroEdital = $sql["numeroEdital"];
                  $objetivo     = $sql["objetivo"];
                  $descricao    = $sql["descricao"];
                  $data         = $sql["dataCadastroAM"];
                  $data_encer   = $sql["dataCadastroAM2"];
}

?>

          <div class="row">
                <div class="col-md-2"><strong>Número do Processo</strong></div>
                <div class="col-md-10"><?php echo $numeroEdital ?></div>
                <div class="col-md-2"><strong>Abertura das Incrições</strong></div>
                <div class="col-md-10"><?php echo $data ?></div>
                <div class="col-md-2"><strong>Encerramento das Incrições</strong></div>
                <div class="col-md-10"><?php echo $data_encer ?></div>
                <div class="col-md-2"><strong>Descrição</strong></div>
                <div class="col-md-10"><?php echo utf8_encode($descricao) ?></div>
                <div class="col-md-2"><strong>Objetivo</strong></div>
                <div class="col-md-10"><?php echo $objetivo ?></div>


          </div>

                  <hr> <!-- Linha para separar os arquivos -->

          <!-- PEGAR OS ARQUIVOS... 1 - EDITAL -->

  <h4>Editais</h4>

<?php

 $sql = "SELECT * FROM edital WHERE processo_id=$_GET[id] ORDER BY id desc";

                  $query = mysql_query($sql);

                  while($sql = mysql_fetch_assoc($query)){


                  $desc_edital = $sql['edital'];

                  $new_desc_edital = $desc_edital;



          //echo "<span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span>";
          echo "<div class='row'>";
          echo '<a href="../processos/assets/arquivos/'.$desc_edital.'" target="_blank">';
          echo "<button type='button' class='btn btn-link'></button></div>";
          echo "".substr($new_desc_edital, 6);
          echo "</div></a>";

}
?>



          <!-- 1 - FIM EDITAL -->

                    <!-- 2 - ANEXO -->

  <h4>Anexos</h4>

<?php

 $sql = "SELECT * FROM anexos WHERE processo_id=$_GET[id] ORDER BY id desc";

                  $query = mysql_query($sql);

                  while($sql = mysql_fetch_assoc($query)){


                  $desc_anexo = $sql['anexo'];
                  $new_desc_anexo = $desc_anexo;

          //echo "<span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span>";
          echo "<div class='row'>";
          echo '<a href="../processos/assets/arquivos/'.$desc_anexo.' " target="_blank">';
          echo "<button type='button' class='btn btn-link'></button></div>";
          echo "".substr($new_desc_anexo, 6);
          echo "</div></a>";

}
?>
                    <!-- 2 - FIM ANEXO -->


                    <!-- 3 - ADENDOS -->


<h4>Adendos</h4>

<?php

 $sql = "SELECT * FROM adendos WHERE processo_id=$_GET[id] ORDER BY id desc";

                  $query = mysql_query($sql);

                  while($sql = mysql_fetch_assoc($query)){


                  $desc_adendos = $sql['adendos'];
                  $new_desc_adendos = $desc_adendos;

          //echo "<span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span>";
          echo "<div class='row'>";
          echo '<a href="../processos/assets/arquivos/'.$desc_adendos.' " target="_blank">';
          echo "<button type='button' class='btn btn-link'></button></div>";
          echo "".substr($new_desc_adendos, 6);
          echo "</div></a>";

}
?>

                    <!-- 3 - FIM ADENDOS -->

                    <!-- 4 - RESULTADOS -->


<h4>Resultados</h4>

<?php

 $sql = "SELECT * FROM resultados WHERE processo_id=$_GET[id] ORDER BY id desc";

                  $query = mysql_query($sql);

                  while($sql = mysql_fetch_assoc($query)){


                  $desc_resultado = $sql['resultado'];
                  $new_desc_resultado = $desc_resultado;

          //echo "<span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span>";
          echo "<div class='row'>";
          echo '<a href="../processos/assets/arquivos/'.$desc_resultado.' " target="_blank">';
          echo "<button type='button' class='btn btn-link'></button></div>";
          echo "".substr($new_desc_resultado, 6);
          echo "</div></a>";


}
?>
<hr><br>
                    <!-- 4 - FIM RESULTADOS -->

  <p>

<a button type="button" class="btn btn-primary btn-lg" href="http://portalsenac.am.senac.br/formulario_cv/form_info_curriculo/form_info_curriculo.php" target="_blank">Inscreva-se!</button></a>
<a button type="button" class="btn btn-default btn-lg" href="../control_processos">Retornar</button></a>
</p>

<?php
                include ('inc/fechaConexao.php');
  ?>



</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>