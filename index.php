<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body>
<body>
     <header>
         <h1>Lista de Exercícios de PHP</h1>
     </header>
     <main>
         <section>
             <h2>PHP Básico</h2>
             <article>
                 <h3>Utilizando comando operações básicas</h3>
                 <ul>
                 <?php
                    for($i = 1; $i <= 12; $i++){
                        if(file_exists('pagina'.$i.'.php')){
                            echo "<li><a href='pagina$i.php'>Pagina $i</a></li>";
                        }
                        else{
                            echo "<li>Pagina $i</li>";

                        }
                    }
                 ?>
                </ul>
             </article>
             <article>
                 <h3>Estruturas de Repetição</h3>
                 <ul>
                 <?php
                    for($i = 13; $i <= 24; $i++){
                        if(file_exists('pagina'.$i.'.php')){
                            echo "<li><a href='pagina$i.php'>Pagina $i</a></li>";
                        }
                        else{
                            echo "<li>Pagina $i</li>";

                        }
                    }
                 ?>
                </ul>
             </article>
         </section>
         <section>
             <h2>Sobre o professor</h2>
             <article>
                 <h3>Prof. Arnaldo Martins Hidalgo Junior</h3>
                 <p><a href="arnaldo.hidalgo@etec.sp.gov.br">arnaldo.hidalgo@etec.sp.gov.br</a></p>
             </article>
             <article>
                 <h3>Componentes</h3>
                 <p>Interface Web I e Sistemas para Web I.</p>
             </article>
         </section>
     </main>
     <footer>
         <p>hidalgojunior.com.br | &copy; 2023</p>
     </footer>
</body>
</ul>
</body>
</html>
