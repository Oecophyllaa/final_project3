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

  public function update_profile()
  {
    if ($this->model('UserModel')->updateUser($_POST) > 0) {
      Flasher::setFlash('Profile Updated', 'success');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    } else {
      Flasher::setFlash('Update Failed', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }
  }

  public function update_pp()
  {
    $id = $_POST['id'];
    $file_name = $_FILES['photo']['name'];
    $file_size = $_FILES['photo']['size'];
    $file_temp = $_FILES['photo']['tmp_name'];
    $file_errx = $_FILES['photo']['error'];
    $target_dir = "C:/xampp/htdocs/final-project/public/img/uploads/profile/";

    // Cek img uploaded
    if ($file_errx === 4) {
      Flasher::setFlash('No File Uploaded', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }

    // Cek File Ext
    $valid_ext = ['jpg', 'jpeg', 'png'];
    $photo_ext = explode('.', $file_name);
    $photo_ext = strtolower(end($photo_ext));
    if (!in_array($photo_ext, $valid_ext)) {
      Flasher::setFlash('Must be JPG, JPEG, PNG', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }

    // Cek File Size
    if ($file_size > 5 * MB) {
      Flasher::setFlash('File size must less than 5MB', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }

    // Cek if file exists already
    if (file_exists($target_dir . $file_name)) {
      Flasher::setFlash('File Already Exists', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }

    // Upload the img
    move_uploaded_file($file_temp, $target_dir . $file_name);

    if ($this->model('UserModel')->updatePhoto($id, $file_name) > 0) {
      Flasher::setFlash('Profile Photo Updated', 'success');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    } else {
      Flasher::setFlash('Update Failed', 'error');
      header("Location: " . BASEURL . "/admin/profile/" . $_SESSION['userdata']['userId']);
      exit;
    }
  }
}
