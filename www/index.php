<!DOCTYPE html>
<html lang='pt-br'>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="application.css">
    <title>Trabalho professor Posser</title>
  </head>
  <body>
    <main>
      <div class="logo">
        <img src="assets/baleia.jpg" alt="Logo">
      </div>
      <b><h1 class="work-name">Sistemas Operacionais</h1></b>
      <h4 class="headline">Trabalho de VM e DOCKER</h4>
      <h4>Esse é um trabalho feito exclusivamente para a aula do professor Fernando Posser</h4>
        <?php
          $conn = mysqli_connect('db','root','verySecret') or die(mysqli_error());
          echo "O Banco de dados está: Conectado!!";
          $conn->close();
        ?>

      <hr>
      <div class="works">
        <h2>Trabalhos</h2>
        <table>
          <thead>
            <tr>
              <th>Matéria</th>
              <th id="days">Dia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Programação orientada a objetos</td>
              <td id="days">Segunda-feira</td>
            </tr>
            <tr>
              <td>Desafio da comunicação</td>
              <td id="days">Terça-feira</td>
            </tr>
            <tr>
              <td>Estrutura de dados</td>
              <td id="days">Quarta-feira</td>
            </tr>
            <tr>
              <td>Melhor matéria</td>
              <td id="days">Quinta-feira</td>
            </tr>
            <tr>
              <td>Redes de Computadores</td>
              <td id="days">Sexta-feira</td>
            </tr>
          </tbody>
        </table>
      </div>
   </main>
 </body>
</html>
