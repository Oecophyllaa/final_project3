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

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/index', $data);
    $this->view('templates/adminfooter');
  }

  public function detail($id)
  {
    $data['title'] = 'Detail Menu';
    $data['menu'] = $this->model('MenuModel')->getMenuById($id);

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/detail', $data);
    $this->view('templates/adminfooter');
  }

  public function create()
  {
    $data['title'] = "Create Menu";
    $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
    $data['jenis'] = $this->model('JenisModel')->getAllJenis();

    $this->view('templates/adminsidebar', $data);
    $this->view('templates/adminheader', $data);
    $this->view('menu/create', $data);
    $this->view('templates/adminfooter');
  }

  public function store()
  {
    if ($this->model('MenuModel')->storeMenu($_POST) > 0) {
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
    $data['title'] = "Edit Menu";
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
    if ($this->model('MenuModel')->updateMenu($_POST) > 0) {
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
