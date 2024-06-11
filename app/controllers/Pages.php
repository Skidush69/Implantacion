<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'CompartiPubli',
        'description' => 'Red social simple construida sobre el marco MVC',
        'info' => 'Puedes contactarme a traves de estos medios',
          'name' => 'Wilfredo Rodriguez',
          'location' => 'Venezuela, Estado Miranda',
          'contact' => '+59 424 286 6787',
          'mail' => 'skidushat@gmail.com'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'Sobre la aplicacion',
        'description' => 'Aplicacion para compartir publicaciones y articulos con otros usuarios'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){
      $data = [
          'title' => 'Contactame',
          'description' => 'Puedes contactarme a traves de estos medios',
          'info' => 'Puedes contactarme a traves de estos medios',
          'name' => 'Wilfredo Rodriguez',
          'location' => 'Venezuela, Estado Miranda',
          'contact' => '+59 424 286 6787',
          'mail' => 'skidushat@gmail.com'
      ];

      $this->view('pages/contact', $data);
    }
  }