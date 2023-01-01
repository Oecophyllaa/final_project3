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
    $arrx = [
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
      // var_dump($arrx);
      // die;
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
}
