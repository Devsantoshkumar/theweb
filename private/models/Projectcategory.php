<?php

class Projectcategory extends Model
{
    protected $allowedColumns = [
        'category',
        'meta_title',
        'meta_description',
        'image',
        'status',
        'date'
    ];

    public function validate($data){

        $this->errors = [];

        if(empty($data['category'])){
           $this->errors['category'] = "Category is required";
        }

        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }


     public function fileValidate($FILE,$allowedTypes){

         $this->errors = [];

         $imageName = $FILE["name"];
         $imageType = $FILE["type"];
         $imageError = $FILE["error"];
         $imageSize = $FILE["size"];

         if($imageSize > 300000){
            $this->errors['imageSize'] = "The image size is too large.";
         }

         if(empty($imageName)){
            $this->errors['imageName'] = "The image can not be empty.";
         }

         if(!in_array($imageType, $allowedTypes)){
            $this->errors['imageType'] = "Invalid image type.";
         }

         if($imageError !== 0){
            $this->errors['imageError'] = "An error occurred while uploading the image.";
         }

         if(count($this->errors) == 0){
            return true;
         }
         return false;
     }


     public function updatedFileValidate($FILE,$allowedTypes){

      $this->errors = [];

      if(!empty($FILE['name'])){

         $imageName = $FILE["name"];
         $imageType = $FILE["type"];
         $imageError = $FILE["error"];
         $imageSize = $FILE["size"];

         if($imageSize > 300000){
            $this->errors['imageSize'] = "The image size is too large.";
         }

         if(!in_array($imageType, $allowedTypes)){
            $this->errors['imageType'] = "Invalid image type.";
         }
   
         if($imageError !== 0){
            $this->errors['imageError'] = "An error occurred while uploading the image.";
         }


         if(count($this->errors) == 0){
            return true;
         }
         return false;

      }else{
         return true;
      }
  }

}

?>