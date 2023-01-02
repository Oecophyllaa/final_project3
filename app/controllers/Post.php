<?php

class Post extends Controller
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
    $data['title'] = "Post";
    $data['data'] = $this->model('PostModel')->getAllPosts();

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('post/index', $data);
    $this->view('templates/adminfooter');
  }

  public function show($slug)
  {
    $data['title'] = "Post";
    $data['data'] = $this->model('PostModel')->getPostBySlug($slug);
    // var_dump($data['data']);
    // die;

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('post/detail', $data);
    $this->view('templates/adminfooter');
  }

  public function create()
  {
    $data['title'] = "Post";

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('post/create', $data);
    $this->view('templates/adminfooter');
  }

  public function store()
  {
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_temp = $_FILES['gambar']['tmp_name'];
    $file_errx = $_FILES['gambar']['error'];
    $target_dir = "C:/xampp/htdocs/final-project/public/img/uploads/artikel/";

    if ($file_errx === 4) {
      Flasher::setFlash('No File Uploaded', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    }

    $valid_ext = ['jpg', 'jpeg', 'png'];
    $photo_ext = explode('.', $file_name);
    $photo_ext = strtolower(end($photo_ext));
    if (!in_array($photo_ext, $valid_ext)) {
      Flasher::setFlash('Must be JPG, JPEG, PNG', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    }

    if ($file_size > 5 * MB) {
      Flasher::setFlash('File size must less than 5MB', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    }

    if (file_exists($target_dir . $file_name)) {
      Flasher::setFlash('File Already Exists', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    }

    move_uploaded_file($file_temp, $target_dir . $file_name);

    $arrx = [
      "gambar" => $file_name,
      "title" => $_POST['title'],
      "slug" => $this->model('PostModel')->slugify($_POST['title']),
      "excerpt" => $this->model('PostModel')->getExcerpt($_POST['excerpt']),
      "body" => $_POST['body'],
      "id_admin" => $_SESSION['userdata']['userId'],
      "published_at" => $_POST['publish']  == "null" ? null : $_POST['publish']
    ];

    if (strlen($_POST['title']) > 50) {
      Flasher::setFlash('Judul Terlalu Panjang!', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    } else {
      if ($arrx['published_at'] === null) {
        if ($this->model('PostModel')->insert($arrx) > 0) {
          Flasher::setFlash('Draft berhasil disimpan.', 'success');
          header("Location: " . BASEURL . "/post");
          exit;
        } else {
          Flasher::setFlash('Draft gagal disimpan.', 'error');
          header("Location: " . BASEURL . "/post");
          exit;
        }
      } else {
        if ($this->model('PostModel')->insert($arrx) > 0) {
          Flasher::setFlash('Artikel berhasil diposting.', 'success');
          header("Location: " . BASEURL . "/post");
          exit;
        } else {
          Flasher::setFlash('Artikel gagal diposting.', 'error');
          header("Location: " . BASEURL . "/post");
          exit;
        }
      }
    }
  }

  public function edit($slug)
  {
    $data['title'] = "Post";
    $data['post'] = $this->model('PostModel')->getPostBySlug($slug);
    // var_dump(htmlspecialchars_decode($data['post']['body']));
    // die;

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('post/edit', $data);
    $this->view('templates/adminfooter');
  }

  public function update($id)
  {
    // var_dump($_FILES);
    // var_dump($_POST);
    // die;
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_temp = $_FILES['gambar']['tmp_name'];
    $file_errx = $_FILES['gambar']['error'];
    $target_dir = "C:/xampp/htdocs/final-project/public/img/uploads/artikel/";

    if ($file_errx === 4) {
      $getPost = $this->model('PostModel')->getPostById($id);
      $file_name = $getPost['gambar'];
    } else {
      $valid_ext = ['jpg', 'jpeg', 'png'];
      $photo_ext = explode('.', $file_name);
      $photo_ext = strtolower(end($photo_ext));
      if (!in_array($photo_ext, $valid_ext)) {
        Flasher::setFlash('Must be JPG, JPEG, PNG', 'error');
        header("Location: " . BASEURL . "/post");
        exit;
      }

      if ($file_size > 5 * MB) {
        Flasher::setFlash('File size must less than 5MB', 'error');
        header("Location: " . BASEURL . "/post");
        exit;
      }

      if (!file_exists($target_dir . $file_name)) {
        move_uploaded_file($file_temp, $target_dir . $file_name);
      }
    }

    $arrx = [
      "id" => $id,
      "gambar" => $file_name,
      "title" => $_POST['title'],
      "slug" => $this->model('PostModel')->slugify($_POST['title']),
      "excerpt" => $this->model('PostModel')->getExcerpt($_POST['excerpt']),
      "body" => $_POST['body'],
      "id_admin" => $_SESSION['userdata']['userId'],
      "published_at" => $_POST['publish']  == "null" ? null : $_POST['publish']
    ];

    // var_dump($arrx);
    // die;

    if (strlen($_POST['title']) > 50) {
      Flasher::setFlash('Judul Terlalu Panjang!', 'error');
      header("Location: " . BASEURL . "/post/create");
      exit;
    } else {
      if ($arrx['published_at'] === null) {
        if ($this->model('PostModel')->update($arrx) > 0) {
          Flasher::setFlash('Draft berhasil diupdate.', 'success');
          header("Location: " . BASEURL . "/post");
          exit;
        } else {
          Flasher::setFlash('Draft gagal diupdate.', 'error');
          header("Location: " . BASEURL . "/post");
          exit;
        }
      } else {
        if ($this->model('PostModel')->update($arrx) > 0) {
          Flasher::setFlash('Artikel berhasil diupdate.', 'success');
          header("Location: " . BASEURL . "/post");
          exit;
        } else {
          Flasher::setFlash('Artikel gagal diupdate.', 'error');
          header("Location: " . BASEURL . "/post");
          exit;
        }
      }
    }
  }

  public function destroy($id)
  {
    if ($this->model('PostModel')->delete($id) > 0) {
      Flasher::setFlash('Postingan berhasil dihapus.', 'success');
      header("Location: " . BASEURL . "/post");
      exit;
    } else {
      Flasher::setFlash('Postingan gagal dihapus.', 'error');
      header("Location: " . BASEURL . "/post");
      exit;
    }
  }
}
