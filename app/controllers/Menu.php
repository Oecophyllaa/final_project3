<?php

class Menu extends Controller
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
    $data["title"] = "Menu";
    $data["menu"] = $this->model('MenuModel')->getAllMenu();
    for ($i = 0; $i < sizeof($data['menu']); $i++) {
      $data['menu'][$i]['deskripsi'] = $this->model('PostModel')->getExcerpt($data['menu'][$i]['deskripsi']);
    }

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/index', $data);
    $this->view('templates/adminfooter');
  }

  public function detail($id)
  {
    $data['title'] = 'Menu';
    $data['menu'] = $this->model('MenuModel')->getMenuById($id);

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/detail', $data);
    $this->view('templates/adminfooter');
  }

  public function create()
  {
    $data['title'] = "Menu";
    $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
    $data['jenis'] = $this->model('JenisModel')->getAllJenis();

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/create', $data);
    $this->view('templates/adminfooter');
  }

  public function store()
  {
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_temp = $_FILES['gambar']['tmp_name'];
    $file_errx = $_FILES['gambar']['error'];
    $target_dir = "C:/xampp/htdocs/final-project/public/img/uploads/menu/";

    if ($file_errx === 4) {
      Flasher::setFlash('No File Uploaded', 'error');
      header("Location: " . BASEURL . "/menu/create");
      exit;
    }

    $valid_ext = ['jpg', 'jpeg', 'png'];
    $photo_ext = explode('.', $file_name);
    $photo_ext = strtolower(end($photo_ext));
    if (!in_array($photo_ext, $valid_ext)) {
      Flasher::setFlash('Must be JPG, JPEG, PNG', 'error');
      header("Location: " . BASEURL . "/menu/create");
      exit;
    }

    if ($file_size > 5 * MB) {
      Flasher::setFlash('File size must less than 5MB', 'error');
      header("Location: " . BASEURL . "/menu/create/");
      exit;
    }

    if (!file_exists($target_dir . $file_name)) {
      move_uploaded_file($file_temp, $target_dir . $file_name);
    }

    if ($this->model('MenuModel')->storeMenu($_POST, $file_name) > 0) {
      Flasher::setFlash('Menu berhasil ditambahkan.', 'success');
      header("Location: " . BASEURL . "/menu");
      exit;
    } else {
      Flasher::setFlash('Menu gagal ditambahkan.', 'error');
      header("Location: " . BASEURL . "/menu");
      exit;
    }
  }

  public function edit($id)
  {
    $data['title'] = "Menu";
    $data['menu'] = $this->model('MenuModel')->getMenuById($id);
    $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
    $data['jenis'] = $this->model('JenisModel')->getAllJenis();

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/edit', $data);
    $this->view('templates/adminfooter');
  }

  public function update()
  {
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_temp = $_FILES['gambar']['tmp_name'];
    $file_errx = $_FILES['gambar']['error'];
    $target_dir = "C:/xampp/htdocs/final-project/public/img/uploads/menu/";

    if ($file_errx === 4) {
      $getMenu = $this->model('MenuModel')->getMenuById($_POST['id_menu']);
      $file_name = $getMenu['gambar'];
    } else {
      $valid_ext = ['jpg', 'jpeg', 'png'];
      $photo_ext = explode('.', $file_name);
      $photo_ext = strtolower(end($photo_ext));
      if (!in_array($photo_ext, $valid_ext)) {
        Flasher::setFlash('Must be JPG, JPEG, PNG', 'error');
        header("Location: " . BASEURL . "/menu/edit/" . $_POST['id_menu']);
        exit;
      }

      if ($file_size > 5 * MB) {
        Flasher::setFlash('File size must less than 5MB', 'error');
        header("Location: " . BASEURL . "/menu/edit/" . $_POST['id_menu']);
        exit;
      }

      if (!file_exists($target_dir . $file_name)) {
        move_uploaded_file($file_temp, $target_dir . $file_name);
      }
    }

    $arrx = [
      "id_menu" => $_POST['id_menu'],
      "nama_menu" => $_POST['nama_menu'],
      "id_kategori" => $_POST['id_kategori'],
      "id_jenis" => $_POST['id_jenis'],
      "deskripsi" => $_POST['deskripsi'],
      "rating" => $_POST['rating'],
      "harga" => $_POST['harga'],
      "gambar" => $file_name
    ];

    if ($this->model('MenuModel')->update($arrx) > 0) {
      Flasher::setFlash('Menu berhasil diupdate.', 'success');
      header("Location: " . BASEURL . "/menu");
      exit;
    } else {
      Flasher::setFlash('Menu gagal diupdate.', 'error');
      header("Location: " . BASEURL . "/menu");
      exit;
    }
  }

  public function destroy($id)
  {
    if ($this->model('MenuModel')->destroyMenu($id) > 0) {
      Flasher::setFlash('Menu baru berhasil dihapus.', 'success');
      header("Location: " . BASEURL . "/menu");
      exit;
    } else {
      Flasher::setFlash('Menu baru gagal dihapus.', 'error');
      header("Location: " . BASEURL . "/menu");
      exit;
    }
  }
}
