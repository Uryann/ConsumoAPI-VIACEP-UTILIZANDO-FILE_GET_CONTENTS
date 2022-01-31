
        <?php

function getAddress ()                      {


$address = (object) [
    
    'cep' => '',
    'logradouro' => '',
    'localidade' => '',
    'bairro' => '',
    'uf' => '',
    'ddd' => '',
    
    
    
];
        
    
  if (isset ($_POST['cep'])) {      
        
        $cep = $_POST['cep'] ?? '18135300';
        
       
        $cep = preg_replace('/[^0-9]/', '', $cep);
        
        
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        

        if (preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep)) {
                
        $address = json_decode(file_get_contents($url));
        
        } else {
            $address->cep = 'CEP INVALIDO'; 
           
        
                }     
      
                            }
return $address;                            
}
        
        ?>
