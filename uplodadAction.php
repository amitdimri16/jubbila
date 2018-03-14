<?php
    
    echo "aaaaaaa";

    $mainDir = $_SERVER ['DOCUMENT_ROOT'].'/jubbila/';
    $uploadPath=$mainDir.'assets/images/uploads';
    $fileName=$_FILES ['myInputName'] ['name']; 
    $filePath=$uploadPath.'/'.$fileName;

    echo $filePath;
        if(file_exists($filePath)){
            header(':', true, 403); // or http_response_code(403); for php>=5.4
            echo 'File exist!'; //Custom error From Server
            return;
        }else{
            if (!move_uploaded_file($_FILES ['myInputName'] ['tmp_name'], $filePath)) {
                 $errors = error_get_last();
                 header(':', true, 403); // or http_response_code(403); for php>=5.4
                 echo $errors; //Error From Server
                 return;
            }
        }
    echo 'success';
?>