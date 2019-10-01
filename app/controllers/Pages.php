<?php
  class Pages extends Controller{
    public function __construct(){
      $this->infoModel = $this->model('Info');
    }

    public function index(){
      $getData = $this->infoModel->getInfo();
      $services = $this->infoModel->getServices();
      $experiences = $this->infoModel->getExperiences();
      $data = [
        'about' =>  $getData,
        'services'  =>  $services,
        'experiences' =>  $experiences
      ];
      echo $this->view('pages/index', $data);
    }
  }
