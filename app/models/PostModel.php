<?php

class PostModel
{
  private $table = "posts";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPosts()
  {
    $query = "SELECT id, title, excerpt, (SELECT first_name FROM detail_user WHERE id_detailuser = id_admin) AS admin, published_at FROM posts;";
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
