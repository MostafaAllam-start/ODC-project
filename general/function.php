<?php 
    function showMessage($message, $type="danger"){
        echo "
            <div class='container'>
                <div class='alert alert-$type'>
                    $message
                </div>
            </div>
        ";
    }
    function validImageUploaded($image){
        $image_name= $image['name'];
        $tmp_name = $image['tmp_name'];
        $size = $image['size'];
        $error = $image['error'];
        $valid = false; 
        if(is_uploaded_file($tmp_name)){
            if($size >= 3*pow(1024,2))
              showMessage("The uploaded file must be at most 3MB.");
            else if(!(strtolower(substr($image_name, -4)) == '.jpg' 
                    ||strtolower(substr($image_name, -5)) == '.jpeg'
                    ||strtolower(substr($image_name, -4)) == '.png'))
                    showMessage("The upload file type is wrong! only allow .jpg,.jpeg,.png.");
            else 
                $valid = true;
          }else{
            switch($error){
              case UPLOAD_ERR_PARTIAL:
                showMessage("File is not completely uplaoded.");
                break;
              case UPLOAD_ERR_NO_FILE:
                showMessage("No File was Selected");
                break;
              default:
                showMessage("Unknown Error.");
            }
          }
          return $valid;
    } 
?>