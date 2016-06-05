<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge; charset=utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <meta name="description" content="Site de Noticias"></meta>
        <meta name="author" content="Gabriel Leocadio"></meta>
        
        <title>Noticias - Voxus.tv</title>
        
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"></link>
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"></link>  
            
        <link rel="stylesheet" href="css/styles.css"></link>
    </head>
    <body>  
        <div class="container">
              <?php require 'templates/navegacao.php' ?>
              <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Leitura de Notícias</h1>
                    
                    <div class="row">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Texto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include 'lib/conexao.php';
                                    $pdo = Conexao::connect();
                                    $sql = 'SELECT * FROM noticia ORDER BY id_noticia DESC';
                                    foreach ($pdo->query($sql) as $row) {
                                            echo '<tr>';
                                            echo '<td>'. $row['titulo'] . '</td>';
                                            echo '<td>'. $row['texto'] . '</td>';
                                            echo '</tr>';
                                    }
                                    Conexao::disconnect();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <hr/>
                    <?php require 'templates/footer.php' ?>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
