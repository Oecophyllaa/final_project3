<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Home';
    $data['menuIndo'] = $this->model('MenuModel')->getMenuByKategori(1);
    $data['menuWest'] = $this->model('MenuModel')->getMenuByKategori(2);
    $data['menuJapn'] = $this->model('MenuModel')->getMenuByKategori(3);

    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
