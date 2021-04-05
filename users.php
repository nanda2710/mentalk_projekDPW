<?php 
include("config.php");
$sql=$dbh->prepare("SELECT name FROM chatters");
$sql->execute();
		$aktip = "";
while($r=$sql->fetch()){
     if(isset($_SESSION['username'])){
	if($_SESSION['username'] == $r['name']){
		$aktip = "<a href='keluar.php' class='keluar'>Keluar</a>";
	}
	 }
 echo "<div class='user'>{$r['name']} $aktip</div>";
}
?>
