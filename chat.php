<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Chat_Application</title>

     <!-- css link start here -->
      <link rel="stylesheet" href="/Chat_Application/style.css">
</head>
<body>
     

     <div class="div1">
          <p> Chat_Application </p>

          <div class="div2">
               <table>
                    <?php 
                         error_reporting(0);

                         include 'db_conn.php';

                         $sql2 = "SELECT * FROM chat_user";
                         $result2 = mysqli_query($conn, $sql2);
                         while($row = mysqli_fetch_array($result2)) {
                              
                              ?>
                                   <tr>
                                        <td id="td1"><?php echo $row['chat']; ?></td>
                                        <td id="td2"><?php echo formatDate($row['time']) ?></td>
                                   </tr>
                              <?php
                         }

                    ?>
               </table>
          </div>

          <form action="chat.php" method="POST">
               <textarea id="chat" name="chat" rows="8" cols="80" placeholder="Write Message"></textarea>
               <input id="chat_btn" type="submit" name="send" value="Send">
          </form>



          <?php 

               

               if(isset($_POST['send'])) {
                    
                    header("location:chat.php");
                    $chat = $_POST['chat'];

                    $sql = "INSERT INTO chat_user(chat) VALUES('$chat')";
                    $result = mysqli_query($conn, $sql);

                    if($result == true) {
                         echo '';
                    } else {
                         echo 'error';
                    }
               }

          ?>


     </div>

</body>
</html>