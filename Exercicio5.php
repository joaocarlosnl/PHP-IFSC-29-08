<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Tratamento de matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">  
</head> 

<body> 
 <h1> Cadastro de medicamentos </h1>
 <form action="index.php" method="post">
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
  
  <div> <br>
    <button name="enviar"> Salvar e processar </button>
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
   }
 ?>    
</body> 
</html> 