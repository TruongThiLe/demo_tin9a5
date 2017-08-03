<?php require_once("nic/connect.php");

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$excerpt=$_POST["excerpt"];
		$user=$_POST["user"];

		$sql = "INSERT INTO posts( title , content , excerpt , user)
			VALUES('{$title}','{$content}','{$excerpt}','{$user}')";
		$query=mysqli_query($conn,$sql);

		if($query){
			echo "<script type='text/javascript'>";
			echo "alert('Viết bài viết thành công')";
			echo "</script>";
		}else{
			echo "<h1>Viết Bài Thất Bại</h1>"  . mysqli_error($conn);
		}
	}

?>
<?php require_once("temp/header_min.php") ?>
<?php require_once("temp/menu.php") ?>
<div id="main">
 	<div id="list" style="text-align:center;">&hearts; Tạo Bài Viết &hearts;</div>

 <form method="post">
 	 <label>Nhập Tiêu Đề
 		<input type="text" name="title" placeholder="Nhập Tiêu Đề">
 	</label>
 	<label>Nhập Nội Dung
 		<textarea placeholder="Nhập Nội Dung Bài Viết" name="content"></textarea>
 	</label>
 	<label>Nhập ND Tóm Tắt
 		<textarea placeholder="Nhập Nội Dung Tóm Tắt" name="excerpt"></textarea>
 	</label>
 	<label>Nhập Bút Danh
 		<input type="text" name="user" placeholder="Nhập Bút Danh">
 	</label>
 	<center>
 		<button type="submit">Viết Bài Mới</button>
 	</center>
 </form>

</div><!--main-->
<?php require_once("temp/bottom.php") ?>