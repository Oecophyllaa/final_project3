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
    $query = "SELECT id, title, slug, excerpt, (SELECT first_name FROM detail_user WHERE id_detailuser = id_admin) AS admin, published_at FROM posts;";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getPostBySlug($slug)
  {
    $query = "SELECT id, title, body, excerpt, (SELECT first_name FROM detail_user WHERE id_detailuser = id_admin) AS admin, published_at FROM posts WHERE slug=:slug;";
    $this->db->query($query);
    $this->db->bind('slug', $slug);
    return $this->db->single();
  }

  public function getExcerpt($str, $startPos = 0, $maxLength = 120)
  {
    if (strlen($str) > $maxLength) {
      $excerpt   = substr($str, $startPos, $maxLength - 3);
      $lastSpace = strrpos($excerpt, ' ');
      $excerpt   = substr($excerpt, 0, $lastSpace);
      $excerpt  .= '...';
    } else {
      $excerpt = $str;
    }

    return $excerpt;
  }

  public function slugify($text, string $divider = '-')
  {
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, $divider);
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
    // lowercase
    $text = strtolower($text);
    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }

  public function insert($input)
  {
    $query = "INSERT INTO posts VALUES('',:title,:slug,:excerpt,:body,:id_admin,:published_at)";
    $this->db->query($query);
    $this->db->bind('title', $input['title']);
    $this->db->bind('slug', $input['slug']);
    $this->db->bind('excerpt', $input['excerpt']);
    $this->db->bind('body', $input['body']);
    $this->db->bind('id_admin', $input['id_admin']);
    $this->db->bind('published_at', $input['published_at']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function delete($id)
  {
    $query = "DELETE FROM posts WHERE id=:id;";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
