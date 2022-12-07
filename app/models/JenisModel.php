<?php

class JenisModel
{
  private $table = "jenis";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJenis()
  {
    $query = "SELECT * FROM jenis";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getJenisById($id)
  {
    $query = "SELECT * FROM jenis WHERE id_jenis=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
