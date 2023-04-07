
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
     <header>
         <h1>Lista de Exercícios de PHP</h1>
     </header>
     <main>
         <section>
             <h2>Exercício 01</h2>
             <article>
                 <h3>Enunciado</h3>
                 <p>Crie um programa que receba o dividendo e o divisor de uma conta e exiba o quociente e o resto (não usar o caractere %).</p>
             </article>
            
         </section>
         <section>
             <h2>Formulário</h2>
             <article>
                 <h3>Divisão</h3>
                 <form method="POST">
                     <table>
                         <tr>
                     <td><label for = "dividendo">Dividendo</label></td>
                    <td><input type="text" name="dividendo" id="dividendo"/></td></tr>
                    <tr><td><label for = "divisor">Divisor</label></td>
                    <td><input type="text"  name="divisor" id="divisor"/></td></tr>
                    <tr><td colspan="2">
                    <input type="submit" name="acao" value="Calcular"/></td></tr>
                    </table>
                </form>

             </article>
             <article>
                 <h3>Resultado</h3>
                 <h4>
                    <?php
                   if (isset($_POST['acao'])){
                       $dividendo = $_POST['dividendo'];
                       $divisor = $_POST['divisor'];
                       $quociente = (int)($dividendo / $divisor);
                       $resto = ($dividendo) - ($quociente *$divisor);
                        echo "O quociente é $quociente e o resto é $resto";
                    }
                    ?>
                 </h4>
             </article>
         </section>
     </main>
     <footer>
     <p><a href="index.php">Página principal</a> | hidalgojunior.com.br | &copy; 2023</p>
     </footer>
 </body>
</html>