<?php

class Blog extends Controller
{
  public function index()
  {
    $data['posts'] = $this->model('PostModel')->getAllPublishedPosts();

    $this->view('templates/header', $data);
    $this->view('blog/index', $data);
    $this->view('templates/footer');
  }

  public function post($slug)
  {
    $data['post'] = $this->model('PostModel')->getPostBySlug($slug);

    $this->view('templates/header', $data);
    $this->view('blog/post', $data);
    $this->view('templates/footer');
  }
}
