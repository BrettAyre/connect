<?php 
  require_once('db.php'); 
  if(!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)) { 
    echo 'Could not connect to mysql on ' . DB_HOST . '\n'; 
  exit; 
  } 
  echo 'Connected to mysql <br />'; 
  if(!mysql_select_db(DB_NAME, $dbconn)) { 
    echo 'Could not user database ' . DB_NAME . '\n'; 
    echo mysql_error() . '\n'; 
    exit; 
  } 
  echo 'Connected to database ' . DB_NAME; ?>
