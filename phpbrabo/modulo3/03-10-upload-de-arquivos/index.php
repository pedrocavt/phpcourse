<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

$folder = __DIR__ . "/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
}

include __DIR__ . "/form.php";

$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

if($_FILES && !empty($_FILES['file']['name'])){
    $fileUpload = $_FILES['file'];
    var_dump($fileUpload);

    $allowebTypes = [
        "image/jpg",
        "image/jpeg",
        "image/png",
        "application/pdf"
    ];

    $newFileName = time() . mb_strstr($fileUpload['name'], ".");

    if(in_array($fileUpload['type'], $allowebTypes)){
        if(move_uploaded_file($fileUpload['tmp_name'], __DIR__."/uploads/{$newFileName}")){
            echo "<p class='trigger accept'>Arquivo enviado!</p>";
        }else{
            echo "<p class='trigger error'>Erro inesperado!</p>";
        }
    }else{
        echo "<p class='trigger error'>Tipo de arquivo não permitido!</p>";
    }

}elseif($getPost){
    echo "<p class='trigger warning'>Whoops, pareque que o arquivo é muito grande</p>";
}
else{
    if($_FILES){
        echo "<p class='trigger warning'>Selecione um arquivo antes de enviar!</p>";
    }
}