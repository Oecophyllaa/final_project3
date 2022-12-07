<?php

class Admin extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['userdata'])) {
      if ($_SESSION['userdata']['isLogin'] != true) {
        Flasher::setFlash('LOGIN REQUIRED!!', 'error');
        header("Location: " . BASEURL . "/auth");
        exit;
      }
    } else {
      Flasher::setFlash('LOGIN REQUIRED!!', 'error');
      header("Location: " . BASEURL . "/auth");
      exit;
    }
  }

  public function index()
  {
    $data['title'] = 'Admin';

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('admin/index', $data);
    $this->view('templates/adminfooter');
  }

  public function profile($id)
  {
    $data['title'] = "My Profile";
    $data['user'] = $this->model('UserModel')->getUser($id);

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('admin/profile', $data);
    $this->view('templates/adminfooter');
  }
}
