<?php

class Project_category extends Controller{

    function __construct(){
        if(Auth::user('rank') != 'admin' || !Auth::loggedIn()){
          $this->redirect('home');
        }
    }

      function index(){

        $errors = [];
        
        $project = new Projectcategory();

        $data = $project->findAll();

        $this->view('project-category',['rows'=>$data,'errors'=>$errors]);
    }



    function add(){

        $errors = [];

        if(count($_POST)>0){

            $project = new Projectcategory();

            if($project->validate($_POST)){

                $allowedTypes = array("image/jpeg", "image/png", "image/gif");

                if($project->fileValidate($_FILES['image'],$allowedTypes)){

                      $_POST['image'] = $project->uploadImage($_FILES['image']);
                      $_POST['date'] = date("y-m-d H:i:s");
                      $project->insert($_POST);
                      $this->redirect('project_category');

                }else{
                    $errors = $project->errors;
                }
            }else{
                $errors = $project->errors;
            }
        }
        $this->view('project-category.add',['errors'=>$errors]);
    }


    function edit($id=NULL){

        $errors = [];

        $project = new Projectcategory();

        $row = $project->where("projectcategorys_id",$id);
        $prevImg = $row[0]->image;
        
        if(count($_POST)>0)
        {
          if($project->validate($_POST))
          {
            $allowedTypes = array("image/jpeg", "image/png", "image/gif");

            if($project->updatedFileValidate($_FILES['image'], $allowedTypes)){
                $_POST['image'] = $project->updateImage($_FILES['image'], $prevImg, $id);
                $_POST['date'] = date("y-m-d H:i:s");
                $project->update($id,$_POST);
                $this->redirect('project_category');
            }else{
                $errors = $project->errors;
            }
          }else{
             $errors = $project->errors;
          }
        }
        $this->view('project-category.edit',['row'=>$row,'errors'=>$errors]);
    }


    function delete($id=NULL){

        $errors = [];

        $project = new Projectcategory();

        $row = $project->where("projectcategorys_id",$id);
        $prevImg = $row[0]->image;

        if($project->deleteImage($prevImg)){

            $project->delete($id);
            $this->redirect('project_category');
            
        }

        $data = $project->findAll();

        $this->view('project-category',['rows'=>$data,'errors'=>$errors]);

    }
}

?>