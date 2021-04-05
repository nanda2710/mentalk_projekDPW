<br/><br/>
<?php 
if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
 $sql->execute(array($name));
 if($sql->rowCount()!=0 || $_POST['name'] == ""){
  $ermsg="<div class='error'>Nama sudah terpakai. Coba gunakan nama yang lain.</div>";
 }else{
  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['username']=$name;
 }
}elseif(isset($display_case)){
 if(!isset($ermsg)){
?>
 <form action="chatKonseling.php" method="POST">
  <input name="name" class="feedback-input" placeholder="Nama kamu" required/>
  <button id="button-blue">Masuk</button>
   <button id="button-blue" ><a href="home-dokter.php">Kembali</a></button>
 </form>
<?php 
 }else{
?>
 <form action="chatKonseling.php" method="POST">
  <input name="name" class="feedback-input" placeholder="Nama kamu" required/>
  <button id="button-blue">Masuk</button>
  <button id="button-blue" ><a href="home-dokter.php">Kembali</a></button>

 </form>
<?php 
  echo $ermsg;
 }
}
?>
 <footer>
         <p style="padding-top: 10px;">
             Kelompok MentalMantul, Copyright &copy 2020.
         </p>
     </footer>
