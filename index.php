<?php
     
    require 'lib/conexao.php';
 
    if (!empty($_POST)) {
        $erroTitulo = null;
        $erroTexto = null;
         
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
         
        $valido = true;
        if (empty($titulo)) {
            $erroTitulo = 'Por favor, preencha o campo Titulo!';
            $valido = false;
        }
         
        if (empty($texto)) {
            $erroTexto = 'Por favor, preencha o campo Texto!';
            $valido = false;
        } 

        if ($valido) {
            $pdo = Conexao::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO noticia (titulo,texto) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($titulo,$texto));
            Conexao::disconnect();
            header("Location: ver_noticias.php");
        }
    }
?>
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
                    <h1 class="page-header text-center">Cadastro de Notícias</h1>
                    
                    <form class="form-horizontal" action="index.php" method="post">
                        <div class="form-group <?php echo !empty($erroTitulo)?'error':'';?>">
                            <label>Titulo</label>
                            <div class="controls">
                                <input class="form-control" name="titulo" type="text"  placeholder="Titulo" value="<?php echo !empty($titulo)?$titulo:'';?>">
                                <?php if (!empty($erroTitulo)): ?>
                                    <span class="help-inline"><?php echo $erroTitulo;?></span>
                                <?php endif; ?>

                            </div>
                        </div>  
                        <div class="form-group <?php echo !empty($erroTexto)?'error':'';?>">
                            <label>Texto</label>
                            <div class="controls">
                                <textarea class="form-control" name="texto" type="text" placeholder="Texto" value="<?php echo !empty($texto)?$texto:'';?>"></textarea>
                                <?php if (!empty($erroTexto)): ?>
                                    <span class="help-inline"><?php echo $erroTexto;?></span>
                                <?php endif;?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                    <hr/>
                    <?php require 'templates/footer.php' ?>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
