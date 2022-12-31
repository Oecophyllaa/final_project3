<?php

class Blog extends Controller
{
  public function index()
  {
    $data['posts'] = $this->model('PostModel')->getAllPosts();
    // var_dump($data['posts']);
    // die;

    $this->view('templates/header', $data);
    $this->view('blog/index', $data);
    $this->view('templates/footer');
  }
}
