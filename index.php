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
                    <h1 class="page-header text-center">Sistema de Cadastro e Leitura de Notícias</h1>
                    <p>Bem-vindo ao sistema de cadastro e leitura de notícias!</p>
                    <p>Selecione uma das opções abaixo:</p>
                    <a href="create_noticias.php" class="btn btn-default">Criar novas notícias</a>
                    <a href="read_noticias.php" class="btn btn-default">Ler novas notícias</a>
                    </div>
                    <hr/>
                    <?php require 'templates/footer.php' ?>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
