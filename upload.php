#Indice de identificacao da ordem de tratamento do arquivos no servidor
$i = 0;
 
#Analisa cada arquivo
foreach ($_FILES["arquivos"]["error"] as $key => $error) {
   
    # Definir o diretório onde salvar os arquivos.
    $destino = "diretorio_destino/" . $_FILES["arquivos"]["name"][$i];
   
    #Move o arquivo para o diretório de destino
    move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i], $destino );
 
    #Próximo arquivo a ser analisado
    $i++;
}
