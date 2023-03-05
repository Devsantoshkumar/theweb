<?php

class Project extends Model
{
    protected $allowedColumns = [
        'title',
        'description',
        'download_file',
        'image',
        'cost',
        'price',
        'status',
        'created_at',
        'downloads',
        'category',
        'meta_title',
        'meta_description'
    ];

    public function validate($data){

        $this->errors = [];

        if(empty($data['title'])){
           $this->errors['title'] = "Title is required";
        }

        if(empty($data['description'])){
            $this->errors['description'] = "Description is required";
        }

        if(empty($data['category'])){
            $this->errors['category'] = "Category is required";
        }

        if(empty($data['cost'])){
            $this->errors['cost'] = "Cost is required";
        }

        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }


     public function fileValidate($FILE, $fileExt=[], $imageExt=[]){

         $this->errors = [];

         if(!empty($FILE['image']['name'])){
            $imageName = $FILE['image']["name"];
            $imageType = $FILE['image']["type"];
            $imageError = $FILE['image']["error"];
            $imageSize = $FILE['image']["size"];

            if(empty($imageName)){
                $this->errors['imageName'] = "The image can not be empty.";
             }

             if($imageError !== 0){
                $this->errors['fileError'] = "An error occurred while uploading the image.";
             }

         }


         if(!empty($FILE['download_file']['name'])){

            $fileName = $FILE['download_file']["name"];
            $fileType = $FILE['download_file']["type"];
            $fileError = $FILE['download_file']["error"];
            $fileSize = $FILE['download_file']["size"];

            if(empty($fileName)){
                $this->errors['fileName'] = "The download file can not be empty.";
             }

             if(!in_array($fileType, $fileExt)){
                $this->errors['fileType'] = "Invalid download file type";
             }

             if($fileError !== 0){
                $this->errors['fileError'] = "An error occurred while uploading the download file.";
             }

         }

         if(count($this->errors) == 0){
            return true;
         }
         return false;
     }


}

?>