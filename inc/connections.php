<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=faisal_chaudry;port=3306","root","root");
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}
