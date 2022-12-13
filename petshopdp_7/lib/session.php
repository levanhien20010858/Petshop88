<?php
class Session
{
  public static function init()
  {
    if (version_compare(phpversion(), '5.4.0', '<')) {
      if (session_id() == '') {
        session_start();
      }
    } else {
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    }
  }

  public static function set($key, $val)
  {
    $_SESSION[$key] = $val;
  }

  public static function get($key)
  {
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    } else {
      return false;
    }
  }
  public static function destroyPro()
  {
    session_destroy();
    header("Location:index.php");
  }
  public static function checkSession()
  {
    self::init();
    if (self::get("admin") == false && self::get("customer") == false || self::get("deleted") == 2) {
      self::destroy();
      header("Location:Login.php");
    }
  }
  public static function checkSessionLogin()
  {
    self::init();
    if (self::get("deleted") == 2) {
      session_destroy();
      echo '<script language="javascript">
                alert("Tài khoản đã bị xóa!");
                </script>';
      header("refresh: 0; url = Login.php");
    }
  }

  public static function checkLogin()
  {
    self::init();
    if (self::get("admin") == true) {
      header("Location: admin.php");
    }
    if (self::get("customer") == true) {
      header("Location: index.php");
    }
  }

  public static function destroy()
  {
    session_destroy();
    header("Location:Login.php");
  }
}