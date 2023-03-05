<?php

class Code extends Controller{

    function index($id=NULL){

        $project = new Project();
        $data = $project->where('projects_id',$id);

        $this->view('code',['row'=>$data]);
    }
}

?>