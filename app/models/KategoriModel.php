<?php

class KategoriModel
{
  private $table = "kategori";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKategori()
  {
    $query = "SELECT * FROM kategori";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getKategoriById($id)
  {
    $query = "SELECT * FROM kategori WHERE id_kategori=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
