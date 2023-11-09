<?php
//live
date_default_timezone_set('Asia/Manila');
ini_set('display_errors', 1);
include_once 'helpers.php';

use PHPMailer\PHPMailer\PHPMailer;

//notes

try {
  $mysqli = new PDO('mysql:host=127.0.0.1;dbname=regions_details', 'root', '');
//   $elibPDO = new PDO('mysql:host=127.0.0.1;dbname=elibrary', 'root', '');
//   $seminarPDO = new PDO('mysql:host=127.0.0.1;dbname=seminar_db', 'root', '');
  // $cssPDO = new PDO('mysql:host=127.0.0.1;dbname=css_db', 'root', '');
  // $connectChart = mysqli_connect("localhost", "root", "", "pds_db");
  // $mysqli = new PDO('mysql:host=10.0.0.231;dbname=pds_db', 'admin', 'datos@bar2021');
  // $mysqli = new PDO('mysql:host=10.0.0.231;dbname=pds_ims', 'admin', 'datos@bar2021');
  // $elibPDO = new PDO('mysql:host=10.0.0.231;dbname=elibrary', 'admin', 'datos@bar2021');
  // See the "errors" folder for details...
  $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}

session_start();

function getData($mysqli)
{
  $temp = array();
  $sql = "SELECT * FROM ilocosnorte WHERE id = 1";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getDataIlocosSur($mysqli)
{
  $temp = array();
  $sql = "SELECT * FROM ilocossur WHERE id = 1";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getDataLaunion($mysqli)
{
  $temp = array();
  $sql = "SELECT * FROM launion WHERE id = 1";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;
}

function getDataPangasinan($mysqli)
{
  $temp = array();
  $sql = "SELECT * FROM pangasinan WHERE id = 1";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $temp[] = $row;
  }
  return $temp;

}

