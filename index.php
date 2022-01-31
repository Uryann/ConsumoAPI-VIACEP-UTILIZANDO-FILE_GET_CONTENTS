<?php

include_once('viacepfgs.php');

$address = getAddress();

?>

<html>
    <head>
        <title>CONSUMINDO API</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      
    
        
        <form action="." method="post">
            <p>Digite o CEP para encontrar o endereço</p>
            <input type="text" placeholder="Digite o CEP" name="cep" value="<?php echo $address->cep ?>"/>
            <input type="submit"/>
         
            </br></br>
            
            
<input type="text" placeholder="rua" name="rua" value="<?php  echo $address->logradouro ?>">

<br><br>

<input type="text" placeholder="localidade" name="localidade" value="<?php echo $address->localidade ?>">

<br><br>

<input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro ?>">

<br><br>

<input type="text" placeholder="uf" name="uf" value="<?php echo $address->uf ?>">

<br><br>

<input type="text" placeholder="ddd" name="ddd" value="<?php echo $address->ddd ?>">
    
                                                                         
        </form>
        
        
        
        
        
    </body>
</html>

