<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



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
    <!--Script de js do Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>