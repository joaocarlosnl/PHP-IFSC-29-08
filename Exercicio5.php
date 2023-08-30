ENVIAR GIT

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Tratamento de matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
 <h1> Cadastro de medicamentos </h1>
 <form action="Exercicio5.php" method="post">
  <fieldset>
   <legend> Cadastro de medicamentos - dados do medicamento 1 </legend>
   <label class="alinha"> Nome: </label> 
   <input type="text" name="nome1" autofocus placeholder="Forneça o nome do primeiro medicamento"> <br>

   <label class="alinha"> Codigo: </label> 
   <input type="text" name="codigo1"> <br>

   <label class="alinha"> Preco: </label>
   <input type="number" name="preco1" min="0" step="0.1">
  </fieldset> <br>  

  <fieldset>
  <legend> Cadastro de medicamentos - dados do medicamento 2 </legend>
   <label class="alinha"> Nome: </label> 
   <input type="text" name="nome2" autofocus placeholder="Forneça o nome do segundo medicamento"> <br>

   <label class="alinha"> Codigo: </label> 
   <input type="text" name="codigo2"> <br>

   <label class="alinha"> Preco: </label>
   <input type="number" name="preco2" min="0" step="0.1">
  </fieldset> <br> 

  <fieldset>
  <legend> Cadastro de medicamentos - dados do medicamento 3 </legend>
   <label class="alinha"> Nome: </label> 
   <input type="text" name="nome3" autofocus placeholder="Forneça o nome do terceiro medicamento"> <br>

   <label class="alinha"> Codigo: </label> 
   <input type="text" name="codigo3"> <br>

   <label class="alinha"> Preco: </label>
   <input type="number" name="preco3" min="0" step="0.1">
  </fieldset> <br>
  
  <fieldset>
    <legend> Módulo de pesquisa pelo nome do remédio </legend>
    <label class="alinha"> Remédio a ser pesquisado: </label>
    <input type="number" name="id"> 
  </fieldset>

  <div> <br>
    <button name="enviar"> Salvar, processar e pesquisar remedio </button>
  </div> 
 </form>
 <?php
  
  if(isset($_POST["enviar"]))
   {
   $remedio1 = $_POST["nome1"];
   $remedio2 = $_POST["nome2"];
   $remedio3 = $_POST["nome3"];

   $codigo1 = $_POST['codigo1'];
   $codigo2 = $_POST['codigo2'];
   $codigo3 = $_POST['codigo3'];

   $preco1 = $_POST['preco1'];
   $preco2 = $_POST['preco2'];
   $preco3 = $_POST['preco3'];

   $matrizMedicamentos = [$codigo1 => [$remedio1, $preco1],
                    $codigo2 => [$remedio2, $preco2],
                    $codigo3 => [$remedio3, $preco3]];
            
   echo "<table>
          <caption> Relação de medicamentos </caption>
          <tr>
           <th> Codigo </th>
           <th> Nome </th>
           <th> Preco </th>
          </tr>";

    foreach($matrizMedicamentos as $matriz => $vetorInterno)
    {     
        echo "<tr>
            <td> $matriz </td>
            <td> $vetorInterno[0] </td>
            <td> $vetorInterno[1] </td>
          </tr>";  
    }
    echo "</table>";
    

   foreach($matrizMedicamentos as $matriz => $vetorInterno)
    {
    $vetorPrecos[$matriz] = $vetorInterno[1];
    }

   $menorPreco = min($vetorPrecos);
   $codigoMenorPreco = array_search($menorPreco, $vetorPrecos);
   $medicMaisBarato = $matrizMedicamentos[$codigoMenorPreco][0];

   echo "<p> Dados do medicamento mais barato: <br>
         Nome = <span> $medicMaisBarato </span> <br>";
   
   $idRemedioPesquisado = $_POST["id"];                
   
   $existe = array_key_exists($idRemedioPesquisado,$matrizMedicamentos);
   
   if(!$existe)
   {
    die("<p> O medicamento de id <span> $idPesquisado </span pesquisado não foi encontrado");
   } else {
    $nomeRemedioPesquisado = $matrizMedicamentos[$idRemedioPesquisado][0];
    $precoRemedioPesquisado = $matrizMedicamentos[$idRemedioPesquisado][1];
   }

   echo "<p> Dados do remédio pesquisado: <br>
         Nome = <span> $nomeRemedioPesquisado </span> <br>
         Código = <span> $idRemedioPesquisado </span> <br>
         Preço = <span> $precoRemedioPesquisado </span> </p>";
   }
 ?>    
</body> 
</html> 

