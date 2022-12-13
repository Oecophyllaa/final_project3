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
    if ($this->model('UserModel')->signin($_POST)) {
      $data['user'] = $this->model('UserModel')->getUser($_POST['email']);
      $_SESSION['userdata'] = [
        "isLogin" => true,
        "userId" => $data['user']['id_detailuser'],
        "userName" => $data['user']['first_name'],
      ];

      Flasher::setFlash("Signin Success", "success");
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    } else {
      Flasher::setFlash("Signin Failed", "error");
      header("Location: " . BASEURL . "/auth");
      exit;
    }
  }

  public function signup()
  {
    $data['title'] = 'Sign Up';
    $this->view('templates/header_auth', $data);
    $this->view('auth/register');
    $this->view('templates/footer_auth');
  }

  public function regist_user()
  {
    $pass = $_POST['pass'];
    $passConf = $_POST['pass_conf'];

    if ($pass === $passConf) {
      if ($this->model('UserModel')->daftar($_POST) > 0) {
        Flasher::setFlash("Register Success", "success");
        header("Location: " . BASEURL . "/auth");
        exit;
      } else {
        Flasher::setFlash("Register Failed", "error");
        header("Location: " . BASEURL . "/auth/signup");
        exit;
      }
    } else {
      Flasher::setFlash("Confirm Your Password", "error");
      header("Location: " . BASEURL . "/auth/signup");
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
