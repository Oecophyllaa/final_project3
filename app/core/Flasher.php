<?php

class Flasher
{
  public static function setFlash($msg, $stat)
  {
    $_SESSION['flash'] = [
      'msg' => $msg,
      'stat' => $stat
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo "<script>
              const notyf = new Notyf();
              notyf." . $_SESSION['flash']['stat'] . "('" . $_SESSION['flash']['msg'] . "');
            </script>";
      unset($_SESSION['flash']);
    }
  }
}
