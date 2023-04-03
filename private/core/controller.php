<?php

class Controller
{
   public function view($view, $data=[])
   {
      extract($data);

      if(file_exists("../private/views/".$view.".view.php"))
      {
         require("../private/views/".$view.".view.php");
      }
      else if(file_exists("../private/views/admin/".$view.".view.php"))
      {
        require("../private/views/admin/".$view.".view.php");
      }
      else
      {
        require("../private/views/not_found.view.php");
      }
   }


   public function load_model($model){
    if(file_exists("../private/models/".ucfirst($model).".php")){
          require("../private/models/".ucfirst($model).".php");
          return $model = new $model();
    }
    return false;
   }


   public function redirect($link)
   {
     header("Location: ".ROOT."/".trim($link,"/"));
     die();
   }
}


?>