<?php

class UserModel
{
  private $table = "user";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function signin($input)
  {
    $email = $input['email'];
    $pass = md5($input['password']);

    $query = "SELECT * FROM user WHERE email=:email AND password=:password ";
    $this->db->query($query);
    $this->db->bind('email', $email);
    $this->db->bind('password', $pass);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getUser($data)
  {
    $query = "SELECT * FROM detail_user WHERE email=:email OR id_detailuser=:id ";
    $this->db->query($query);
    $this->db->bind('email', $data);
    $this->db->bind('id', $data);

    return $this->db->single();
  }

  public function updateUser($input)
  {
    $id = $input['id'];
    $fname = $input['first_name'];
    $lname = $input['last_name'];
    $raw_date = str_replace('/', '-', $input['birthday']);
    $birthday = date('Y-m-d', strtotime($raw_date));
    $gender = $input['gender'];
    $email = $input['email'];
    $phone = $input['phone'];
    $city = $input['city'];
    $country = $input['country'];

    $query = "UPDATE detail_user SET first_name=:fname, last_name=:lname, birthday=:birthday, gender=:gender, email=:email, phone=:phone, city=:city, country=:country, job=:job WHERE id_detailuser=:id";
    $this->db->query($query);
    $this->db->bind('fname', $fname);
    $this->db->bind('lname', $lname);
    $this->db->bind('birthday', $birthday);
    $this->db->bind('gender', $gender);
    $this->db->bind('email', $email);
    $this->db->bind('phone', $phone);
    $this->db->bind('city', $city);
    $this->db->bind('country', $country);
    $this->db->bind('job', "Admin");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function daftar($input)
  {
    $hashPass = md5($input['pass']);

    $query = "INSERT INTO user VALUES('',:email,:password,1)";
    $this->db->query($query);
    $this->db->bind('email', $input['email']);
    $this->db->bind('password', $hashPass);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
