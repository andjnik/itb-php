<?php
    class PhotoManager {
        public static function uploadPhoto($id, $imagesLocation){
            $image = $_FILES["fileToUpload"]["tmp_name"];
            if($image !== "") {
                $delimiter = ".";
                $imageNameParts = explode($delimiter, $_FILES["fileToUpload"]["name"]);
                $imageNameParts[0] = $id;
                $imageName = implode($delimiter, $imageNameParts);
    
                $imagePath = $imagesLocation . $imageName;
    
                $result = move_uploaded_file($image, $imagePath);
                if($result == false) {
                    echo "Error uploading the image.";
                }
            }
        }

        public static function getProfilePhoto($id, $gender, $imagesLocation){
            $photoLocation = $imagesLocation . $id . ".jpg";
            if(file_exists($photoLocation)){
                return $photoLocation;
            }
            if($gender == "m"){
                return $imagesLocation . "man.jpg";
            }
            if($gender == "f"){
                return $imagesLocation . "woman.jpg";
            }
            return $imagesLocation . "default.jpg";
        }
    }
?>