<?php

class MenuModel
{
  private $table = "menu";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function count()
  {
    $query = "SELECT COUNT(id_menu) AS jml_menu FROM menu;";
    $this->db->query($query);
    return $this->db->single();
  }

  public function getAllMenu()
  {
    $query = "SELECT menu.id_menu, menu.nama_menu, kategori.nama_kategori, jenis.nama_jenis, menu.deskripsi, menu.rating, menu.harga FROM ((menu INNER JOIN kategori ON menu.id_kategori = kategori.id_kategori) INNER JOIN jenis ON menu.id_jenis = jenis.id_jenis) ORDER BY menu.id_menu ASC";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getMenuById($id)
  {
    $query = "SELECT menu.id_menu, menu.nama_menu, kategori.nama_kategori, jenis.nama_jenis, menu.deskripsi, menu.rating, menu.harga, menu.gambar FROM ((menu INNER JOIN kategori ON menu.id_kategori = kategori.id_kategori) INNER JOIN jenis ON menu.id_jenis = jenis.id_jenis) WHERE menu.id_menu=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function storeMenu($input, $img)
  {
    $query = "INSERT INTO menu VALUES ('',:nama_menu,:id_kategori,:id_jenis,:deskripsi,:rating,:harga,:gambar) ";
    $this->db->query($query);
    $this->db->bind('nama_menu', $input['nama_menu']);
    $this->db->bind('id_kategori', $input['id_kategori']);
    $this->db->bind('id_jenis', $input['id_jenis']);
    $this->db->bind('deskripsi', $input['deskripsi']);
    $this->db->bind('rating', $input['rating']);
    $this->db->bind('harga', $input['harga']);
    $this->db->bind('gambar', $img);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function update($input)
  {
    $query = "UPDATE menu SET nama_menu=:nama_menu, id_kategori=:id_kategori, id_jenis=:id_jenis, deskripsi=:deskripsi, rating=:rating, harga=:harga, gambar=:gambar WHERE id_menu=:id_menu ";
    $this->db->query($query);
    $this->db->bind('nama_menu', $input['nama_menu']);
    $this->db->bind('id_kategori', $input['id_kategori']);
    $this->db->bind('id_jenis', $input['id_jenis']);
    $this->db->bind('deskripsi', $input['deskripsi']);
    $this->db->bind('rating', $input['rating']);
    $this->db->bind('harga', $input['harga']);
    $this->db->bind('gambar', $input['gambar']);
    $this->db->bind('id_menu', $input['id_menu']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function destroyMenu($id)
  {
    $query = "DELETE FROM menu WHERE id_menu=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
