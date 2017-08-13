<?php require_once('nic/connect.php');?>
<?php require_once('temp/header.php');?>
<?php require_once('temp/menu.php');?>
<div id="main-nd">
	<?php
		$id=$_GET['id'];
		$sql="SELECT * FROM posts WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
	?>
	<div id="list-title">
		<a href="index.php"><h5>Trang Chủ</h5></a> <h5> &#124; </h5>
		<a href="single.php?id=<?php echo $row['id'];?>"><h5><?php echo $row['title']; ?></h5></a>
	</div><!!--title--->
	
	<div class="main-list">
		<ul>
			<li><a hrfe="http://fb.com"  title="facebook" ><img src="img/icon/fb.png"></a></li>
			<li><a hrfe="http://fb.com"  title="Messenger" ><img src="img/icon/ms.png"></a></li>
			<li><a hrfe="http://gmail.com"  title="Gmail" ><img src="img/icon/icon.png"></a></li>
		</ul>
	</div><!--main-list-->

	<br><br><br><br>

	 <div class="content-single">
	 		<?php echo $row['content']; ?>
	 	
	 </div>
	<!--main-nd-->
<?php endwhile; ?>

</div><!--main-->
<?php require_once('temp/bottom.php');?>




