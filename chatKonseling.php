<!DOCTYPE html>
<html>
 <head>
  <script src="jquery.min.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
 </head>
 <body>
	<div id="konten">
	<div class="tabs"><div class="tab" data-dip="chat">CHATS</div><div class="tab" data-dip="users">USERS</div></div>
   <div class="chat">
     <?php 
	 include("config.php");include("masuk.php");
     if(isset($_SESSION['username'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      include("masuk.php");
     }
     ?>
   </div>
   <div class="users" style='display:none'>
     <?php include("users.php");?>
    </div>
	</div>
 </body>
</html>
