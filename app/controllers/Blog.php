<?php

class Blog extends Controller
{
  public function index()
  {
    $data['posts'] = $this->model('PostModel')->getAllPosts();

    $this->view('templates/header', $data);
    $this->view('blog/index', $data);
    $this->view('templates/footer');
  }
}
