<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
    header("Location: login.php");
    exit;
  }
