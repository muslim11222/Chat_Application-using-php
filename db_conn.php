<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'chat_application';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);
     if(!$conn) {
          echo 'database connection error' .mysqli_connect_error();
     }

     function formatDate($date) {
          return date('g:i a', strtotime($date));
      }
      

?>