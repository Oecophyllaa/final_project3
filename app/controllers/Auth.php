<?php

class Auth extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data['title'] = "Sign In";
    $this->view('templates/header_auth', $data);
    $this->view('auth/signin');
    $this->view('templates/footer_auth');
  }

  public function signin()
  {
    if ($this->model('UserModel')->isUserExist($_POST['email']) > 0) {
      if ($this->model('UserModel')->validateUser($_POST) > 0) {
        $data['user'] = $this->model('UserModel')->getUser($_POST['email']);
        $_SESSION['userdata'] = [
          "isLogin" => true,
          "userId" => $data['user']['id_detailuser'],
          "userName" => $data['user']['first_name'],
        ];
        Flasher::setFlash('Login Success!!', 'success');
        header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
        exit;
      } else {
        Flasher::setFlash('EMAIL / PASS INCORRECT!!', 'error');
        header("Location: " . BASEURL . "/auth");
        exit;
      }
    } else {
      Flasher::setFlash('USER NOT FOUND!!', 'error');
      header("Location: " . BASEURL . "/auth");
      exit;
    }
  }

  public function signout()
  {
    unset($_SESSION['userdata']);
    Flasher::setFlash("Logout Success", "success");
    header("Location: " . BASEURL . "/auth");
    exit;
  }
}
