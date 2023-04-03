
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
                 <p>Crie um exercício que receba o ano de nascimento 
                     de uma pessoa e o ano atual e exiba sua idade.</p>
             </article>
            
         </section>
         <section>
             <h2>Formulário</h2>
             <article>
                 <h3>Cálculo de Idade</h3>
                 <form method="POST">
                     <table>
                         <tr>
                     <td><label for = "anoAtual">Ano Atual</label></td>
                    <td><input type="text" value="<?=date('Y')?>" name="anoAtual" id="anoAtual"/></td></tr>
                    <tr><td><label for = "anoNascimento">Ano de Nascimento</label></td>
                    <td><input type="text"  name="anoNascimento" id="anoNascimento"/></td></tr>
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
                        $anoAtual = $_POST['anoAtual'];
                        $anoNascimento = $_POST['anoNascimento'];
                        $idade = $anoAtual - $anoNascimento;
                        if ($idade > 1){
                        echo "Idade: $idade anos";
                        }
                        else{
                            echo "Idade: $idade ano";
                        }
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