<?php
  class Pages extends Controller{
    public function __construct(){
      $this->infoModel = $this->model('Info');
    }

    public function index(){
      $getData = $this->infoModel->getInfo();
      $services = $this->infoModel->getServices();
      $experiences = $this->infoModel->getExperiences();
      $posts = $this->infoModel->getBlogPosts();
      $data = [
        'about' =>  $getData,
        'services'  =>  $services,
        'experiences' =>  $experiences,
        'posts' =>  $posts
      ];
      $this->view('pages/index', $data);
    }

    public function blog(){
        $blogposts = $this->infoModel->getBlogPosts();
        $data = [
            'posts' =>  $blogposts
        ];
        
        $this->view('pages/blog', $data);
    }

    public function admin(){
        $data = "123";
        echo $this->view('admin/pages/dashboard', $data);
    }

      public function experiences(){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                  'title' =>  trim($_POST['title']),
                  'company' =>  trim($_POST['company']),
                  'description' =>  trim($_POST['description']),
                  'doj' =>  trim($_POST['doj']),
                  'dol' =>  trim($_POST['dol']),
                  'title_err' =>  '',
                  'company_err' =>  '',
                  'description_err' =>  '',
                  'doj_err' =>  '',
              ];

              if(empty($data['title'])){
                  $data['title_err'] = "Please enter title";
              }

              if(empty($data['company'])){
                  $data['company_err'] = "Please enter company";
              }

              if(empty($data['doj'])){
                  $data['doj_err'] = "Please enter date of join";
              }

              if(empty($data['title_err'] && $data['company_err'] && $data['doj_err'])){
                  if($this->infoModel->postExperinces($data)){
                      $this->view('admin/pages/experiences', $data);
                  }
              }
              else{
                  $this->view('admin/pages/experiences', $data);
              }
          }
          else{
              $experiences = $this->infoModel->getExperiences();
              $data = [
                  'title' =>  '',
                  'company' =>  '',
                  'description' =>  '',
                  'doj' =>  '',
                  'dol' =>  '',
                  'title_err' =>  '',
                  'company_err' =>  '',
                  'description_err' =>  '',
                  'doj_err' =>  '',
                  'dol_err' =>  '',
                  'experiences' =>  $experiences
              ];

              //Load view
              $this->view('admin/pages/experiences', $data);
          }
      }

      public function about(){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                  'fname' =>  trim($_POST['fname']),
                  'lname' =>  trim($_POST['lname']),
                  'dob' =>  trim($_POST['dob']),
                  'email' =>  trim($_POST['email']),
                  'phone' =>  trim($_POST['phone']),
                  'residence' =>  trim($_POST['residence']),
                  'address' =>  trim($_POST['address']),
                  'about' =>  trim($_POST['about']),
                  'fname_err' =>  '',
                  'lname_err' =>  '',
                  'dob_err' =>  '',
                  'email_err' =>  '',
                  'phone_err' =>  '',
                  'residence_err' =>  '',
                  'address_err' =>  '',
                  'about_err' =>  ''
              ];

              if(empty($data['fname'])){
                  $data['fname_err'] = "Please enter first name";
              }
              if(empty($data['lname'])){
                  $data['lname_err'] = "Please enter last name";
              }

              if(empty($data['email'])){
                  $data['email_err'] = "Please enter email";
              }

              if(empty($data['dob'])){
                  $data['dob_err'] = "Please enter date of birth";
              }

              if(empty($data['phone'])){
                  $data['phone_err'] = "Please enter phone";
              }

              if(empty($data['fname_err'] && $data['lname_err'] && $data['dob_err']) && $data['email_err'] && $data['phone_err']){
                  if($this->infoModel->postAbout($data)){
                      $this->view('admin/pages/about', $data);
                  }
              }
              else{
                  $this->view('admin/pages/about', $data);
              }
          }
          else{
              $abouts = $this->infoModel->getInfo();
              $data = [
                  'fname' =>  '',
                  'lname' =>  '',
                  'dob' =>  '',
                  'email' =>  '',
                  'phone' =>  '',
                  'residence' =>  '',
                  'address' =>  '',
                  'about' =>  '',
                  'fname_err' =>  '',
                  'lname_err' =>  '',
                  'dob_err' =>  '',
                  'email_err' =>  '',
                  'phone_err' =>  '',
                  'residence_err' =>  '',
                  'address_err' =>  '',
                  'about_err' =>  '',
                  'about' =>  $abouts
              ];

              //Load view
              $this->view('admin/pages/about', $data);
          }
      }
  }
