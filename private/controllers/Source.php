<?php

class Source extends Controller{

    function index($id=NULL){

        $project = new Project();

        if(!empty($id)){
            $projData = $project->where("category",$id);
        }else{
            $projData = $project->findAll();
        }
        
        $this->view('source',['rows'=>$projData]);
    }
}

?>