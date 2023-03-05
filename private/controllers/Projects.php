<?php

class Projects extends Controller{

    function __construct(){
        if(Auth::user('rank') != 'admin' || !Auth::loggedIn()){
          $this->redirect('home');
        }
    }

    function index(){
        
        $errors = [];

        $project = new Project();

        $data = $project->findAll();

        $this->view('projects',['rows'=>$data,'errors'=>$errors]);
    }


    function add(){

        $errors = [];
        
        if(count($_POST)>0){

           $project = new Project();
           $filesAllowed = array("application/x-zip-compressed", "application/pdf");
           $imageAllowed = array("jpg", "png","jpeg");

           if($project->validate($_POST)){

                if($project->fileValidate($_FILES,$filesAllowed,$imageAllowed)){

                    $_POST['image'] =  $project->uploadImage($_FILES['image']);
                    $_POST['download_file'] =  $project->uploadImage($_FILES['download_file']);
                    $_POST['created_at'] = date("y-m-d H:i:s");
                    $project->insert($_POST);
                    $this->redirect('projects');

                }else{
                    $errors = $project->errors;
                }
           }else{
              $errors = $project->errors;
           }
        }

        $this->view('projects.add',['errors'=>$errors]);
    }



    function edit($id=NULL){

        $errors = [];

        $project = new Project();
        $row = $project->where("projects_id",$id);
        $privDownload = $row[0]->download_file;
        $privImage = $row[0]->image;
        
        if(count($_POST)>0){

            if($project->validate($_POST)){

                $filesAllowed = array("application/x-zip-compressed", "application/pdf");
                $imageAllowed = array("jpg", "png","jpeg");

                if(!empty($_FILES['download_file']['name'])){

                    if($project->fileValidate($_FILES,$filesAllowed,"")){

                        $_POST['download_file'] = $project->updateImage($_FILES['download_file'],$privDownload,$id);
                        $_POST['created_at'] = date("y-m-d H:i:s");

                    }else{
                        $errors = $project->errors;
                    }
                }else{
                    $_POST['download_file'] = $privDownload;
                }


                if(!empty($_FILES['image']['name'])){

                    if($project->fileValidate($_FILES,"",$imageAllowed)){

                        $_POST['image'] = $project->updateImage($_FILES['image'],$privImage,$id);
                        $_POST['created_at'] = date("y-m-d H:i:s");

                    }else{
                        $errors = $project->errors;
                    }
                }else{
                    $_POST['image'] = $privImage;
                }

                $project->update($id,$_POST);
                $this->redirect("projects");
            }else{
                $errors = $project->errors;
            }
            
        }

        $this->view('projects.edit',['row'=>$row, 'errors'=>$errors]);
    }


    function delete($id=NULL){

        $errors = [];

        $project = new Project();

        $folder = "uploads/";

        $row = $project->where("projects_id",$id);
        $prevDownload = $row[0]->download_file;
        $prevImage = $row[0]->image;

        if($project->deleteImage($prevDownload) && $project->deleteImage($prevImage)){

            $project->delete($id);
            $this->redirect('projects');
            
        }

        $data = $project->findAll();

        $this->view('projects',['rows'=>$data,'errors'=>$errors]);
    }
}

?>