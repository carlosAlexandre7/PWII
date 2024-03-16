<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de IMC</title>
    <!--link conectando o css do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="C:\Users\Admin\Downloads\Site pousada\images\Sem Título-2.png">
    <link rel="stylesheet" href="C:/Users/Rosário/Desktop/Site pousada/css/style.css">
  </head>

  <!--área da navbar usando bootstrap-->
  <body>
    <nav class="navbar navbar-expand-lg bs-light" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images\logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#"><p class="text-primary"><strong>IMCalculator</strong></p></a>
            </div>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Digite sua duvida" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Procurar</button>
          </form>
        </div>
      </nav>    

   <!--Imagem principal usando bootstrap-->
<div class="card">
  <div class="card-body">
  </div>
  <img src="images/fita.png" class="card-img-bottom" alt="images/fita.png">
</div>

      <!--Frase para indicar o usuário-->
      <center>
        <p class="slogan"><h1>Calcule o seu IMC e veja a tabela abaixo</h1></p>
      </center>
<br>

    <h3>Cálculo IMC</h3>
    <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.</p>
    <p>O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
    <p>Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">IMC</th>
      <th scope="col">Classificação</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <td>MENOR QUE 18,5</td>
      <td>MAGREZA</td>
    </tr>
    <tr>
      <td>ENTRE 18,5 E 24,9</td>
      <td>NORMAL</td>
    </tr>
    <tr>
      <td>ENTRE 25,0 E 29,9</td>
      <td>SOBREPESO</td>
    </tr>
    <tr>
      <td>ENTRE 30,0 E 39,9</td>
      <td>OBESIDADE</td>
    </tr>
    <tr>
      <td>MAIOR QUE 40,0</td>
      <td>OBESIDADE GRAVE</td>
    </tr>
  </tbody>
</table>
    </div>
    <?php
	$peso = 35;
	$altura = 1.80;
	$imc = $peso / ($altura*$altura);
	echo "<p>O peso selecionado foi ". $peso." e a altura foi ".$altura."</p>";
	if($imc <18.5){
		echo "<p>Sua situação é de magreza</p>";
	}else if($imc <24.9){
		echo "<p>Sua situação é de normalidade</p>";
	}else if($imc <29.9){
		echo "<p>Sua situação é de sobrepeso</p>";
	}else if($imc <39.9){
		echo "<p>Sua situação é de obesidade</p>";
	}else{
		echo "<p>Sua situação é de obesidade grave</p>";
	}
    ?>

<!--Footer/Rodape usando bootstrap-->
<footer width="120%" class="rodape">
  <div  class="text-bg-dark p-3">&copy; Todos os direitos reservados<br> IMCalculator -  R. gaspar dias de ataide, 290 - Guaianases, São Paulo</div>
</footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
