<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
          <meta charset="utf-8">
        <title>Sobre</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body>
               <div  class="centralizar">
               
               <header id="cabecalho">

                <a href="/" class="logo">
                    <img src="/img/logo.jpg" alt="logo IMDB">
                </a>

                <nav class="menu">
                    <a class="menu-link" href="/">Home</a>
                    <a class="menu-link" href="/lista.html">Lista de Filmes</a>
                    <a class="menu-link" href="/sobre.html">Sobre</a>
                </nav>

                <form class="form-pesquisa">
                    <input type="text" name="pesquisa" />
                    <button>Pesquisar</button>
                </form>
            </header>

        <?php include_once $page . '.php'; ?>
         <footer id="rodape">
+            <p>
+                &copy; CopyRight - "Site do Link" - Todos os Direitos Reservados 
+                <br />
+                <a href="mailto:falecom@tiago.link">falecom@tiago.link</a>
+            </p>
+        </footer>
        </div>
    </body>
</html>