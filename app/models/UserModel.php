<?php

class UserModel
{
  private $table = "user";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function isUserExist($email)
  {
    $query = "SELECT * FROM user WHERE email=:email ";
    $this->db->query($query);
    $this->db->bind('email', $email);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function validateUser($data)
  {
    $query = "SELECT * FROM user WHERE email=:email AND password=:password ";
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getUser($data)
  {
    $query = "SELECT *, DATE_FORMAT(birthday, '%d/%m/%Y') AS birthday FROM detail_user WHERE email=:email OR id_detailuser=:id ";
    $this->db->query($query);
    $this->db->bind('email', $data);
    $this->db->bind('id', $data);

    return $this->db->single();
  }

  public function daftar($input)
  {
    $query = "INSERT INTO user VALUES('',:email,:password,1)";

    $this->db->query($query);
    $this->db->bind('email', $input['email']);
    $this->db->bind('password', $input['pass']);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
