
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
             <h2>Exercício 03</h2>
             <article>
                 <h3>Enunciado</h3>
                 <p>Crie um programa que receba um valor em minutos e exiba o respectivo em dias (se houver, horas, minutos)</p>
             </article>
            
         </section>
         <section>
             <h2>Formulário</h2>
             <article>
                 <h3>Cálculo de Dias</h3>
                 <form method="POST">
                     <table>
                         <tr>
                     <td><label for = "minutos">Informe Minutos:</label></td>
                    <td><input type="text" required  name="minutos" id="minutos"/></td></tr>
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
                        $minutos = $_POST['minutos'];
                        if($minutos >= 1440){
                            $dias = (int)(($minutos / 60)/24);
                            $minutos = $minutos - ($dias * 24 * 60);
                            echo "$dias dia(s) e ";
                        }
                        if ($minutos >= 60){
                            $horas = (int)($minutos / 60);
                            $minutos = $minutos - ($horas * 60);
                            echo "$horas hora(s) e ";
                        }
                        if ($minutos < 60){
                                
                                echo "$minutos minuto(s).";
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