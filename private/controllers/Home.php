<?php

class Home extends Controller{

    function index(){
          $project = new Project();

          $projData = $project->findAll();

          $this->view('home',['prows'=>$projData]);
    }
}

?>