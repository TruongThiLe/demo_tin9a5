<?php require_once("nic/connect.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Tin9a5 - Diễn dần công nghệ thông tin</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/css/main.css"/>

	<meat name="viewport" content="width=device-width,initial-scale=1"/>
</head>
<body>
	<div  id="top">
		<div class="top-text">ĐH Kinh Tế - Kỹ Thuật CN Hà Nội</div>
		<div class="login">
			<ul>
				<li><a href="dangky.php">Đăng Ký</a></li>
				<li><a href="dangnhap.php">Đăng Nhập</a></li>
			</ul>
		</div><!--login-->
	</div><!--top-->

	<div id="header">
	 <div class="header">
			<div id="logo">
				<div class="logo-title">B</div>
				<div class="text">Log Tin9A5</div>
			</div><!--logo-->
			<div id="search">
				<form method="post">
					<input type="search" placeholder="Bạn Tìm Gì nào" name="search">
					<button type="submit" class="btn btn-success">Tìm</button>
				</form>
			</div><!--search-->
	 </div><!--header-class-->
	</div><!--header-->
	<div id="menu">
			<ul>
				<li><a href="index.php"><img src="img/icon/home.png">Trang Chủ</a></li>
				<li><a href="#">Diễn Đàn</a></li>
				<li><a href="#">Lịch Học</a></li>
				<li><a href="#">Tài Liệu
					<ul class="sub-menu">
						<li><a href="#">Học Html Cơ Bản</a></li>
						<li><a href="#">Học Php</a></li>
						<li><a href="#">Học Javascript</a></li>
						<li><a href="#">Học Mysql</a></li>
					</ul>

				</a></li>
				<li><a href="#">Media</a>
					<ul class="sub-menu">
						<li><a href="#">Mp3</a></li>
						<li><a href="#">Video Html 5</a></li>
						<li><a href="#">Video Php</a></li>
						<li><a href="#">Video Javascript</a></li>
						<li><a href="#">Video Mysql</a></li>
						
					</ul>

				</li>

			</ul>
	</div><!--menu-->

	<div id="main">
		<div id="list">&raquo; Câu Hỏi Diễn Đàn</div>
		<?php
			$sql="SELECT * FROM posts ORDER BY id DESC";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :

		?>
		<div class="main-content">
			<div class="content-img">
				<img src="img/anh.jpg">
			</div><!--content-img-->
			<div class="content-nd">
				<div class="content-title"><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></div><!--content-title-->
				<div class="content"><?php echo $row['excerpt']; ?></div><!--content-->
				<div class="content-date"><font color="red" style="font-weight:bold;">Time: </font><?php echo $row['datetime'];?>
					 &hearts; 
				<font color="red" style="font-weight:bold;">You: </font><?php echo $row['user'];?>

				</div><!--content-date-->

			</div><!--content-nd-->
			
		</div><!--main-->
		<div style="clear:left;"></div>
		<?php endwhile; ?>

	</div><!--main-->
	</div>
	<div id="bottom">
	<div style="clear:left;">
		<h2> Blog Tin9a5</h2>
		<div class="t1"><h2>Building</h2>
			<h4>Địa Chỉ: 296 Lĩnh Nam - Hoàng Mai - Hà Nội</h4>
			<h4>Coppyright: Tuyển Giảng &trade;</h4>
		</div>
		<div class="t2">
			<h2>Thiết Kế</h2>
			<h4>+ Nhận tư vấn về lập trình</h4>
			<h4>+ Xây dựng blog mạnh</h4>
			<h4>+ Phát triển đúng mục đích</h4>

		</div>
		<div class="t3">
			<h2>Bản Quyền</h2>

			<h4>Uneti -Tin9a5 &copy;</h4>
			
		</div>
	</div><!--bottom-->

</body>
</html>