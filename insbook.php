<!DOCTYPE html>
<html>
<head>
	<title>Insert Book</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="https://ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scaleable=no">
    <script  src="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="post" class="form-default" enctype="multipart/form-data">
	<h5>
        <table class="table" style="margin-left: 420px;
                                    margin-right: 0px;
                                    border-right-width: 150px;
                                    padding-right: 50px;
                                     width: 650px;">    
         <tr>
         	<th>Name :</th>
         	<td><input type="text" name="name"></td>
         </tr>  
         <tr>
         	<th>Publ
         	isher :</th>
         	<td><input type="text" name="publisher"></td>
         </tr>
         <tr>
         	<th>Edition :</th>
         	<td><input type="text" name="edition"></td>
         </tr>
         <tr>
         	<th>ISBN :</th>
         	<td><input type="text" name="isbn"></td>
         </tr>
         <tr>
         	<th>Page :</th>
         	<td><input type="number" name="page"></td>
         </tr>
         <tr>
         	<th>Price :</th>
         	<td><input type="number" name="price"></td>
         </tr>
         <tr>
         	<th>Img :</th>
         	<td><input type="file" name="img" ></td>
         </tr>
         <tr>
         	<th>Author :</th>
         	<td><input type="text" name="author"></td>
         </tr>
         <tr>
         	<th>Description :</th>
         	<td><textarea rows="4" cols="25" name="description"></textarea></td>
         </tr>
         <tr>
         	<th ></th>
         	<td colspan="2"><button class="btn btn-primary" name="submit" value="submit">Submit</button></td>
         </tr>
         <tr>
         	<th></th>
         	<td></td>
         </tr>
		</table>
	</h5>
</form>
</body>
<?php 
	
	include_once 'connection.php';

	if (isset($_POST['submit'])) 
	{
		
        $img=$_FILES['img'];
		$name =$_POST['name'];
		$newname =trim($name);
		var_dump($newname);
		$publisher = $_POST['publisher'];
		$edition = $_POST['edition'];
		$isbn = $_POST['isbn'];
		$page = $_POST['page'];
		$price = $_POST['price'];
		$author = $_POST['author'];
		$description = $_POST['description'];
		$path = '';

		$fname = $img['name'];
		$ftype = $img['type'];
		$ftname = $img['tmp_name'];
		$ferror = $img['error'];
		$fsize = $img['size'];
		$fexten = explode(".",$fname);
		$faexten = strtolower(end($fexten));
		$allow = array('jpg','jpeg','png');

		if (in_array($faexten,$allow))
	    {
			if ($ferror === 0)
			{
				if ($fsize < 5000000)
				{
						$fnewname=$newname.".".$faexten;
						$store = "book/".trim($fnewname);
						$path =trim($store);
						move_uploaded_file($ftname,$store);
				}
				else
				{
						echo "<script>alert('File Size is must be less than 5mb')</script>";
				}
			}
			else
			{
					echo "<script>alert('Error While Uploading an image..')</script>";
			}
		}
		else
		{
			echo "<script>alert('You can't upload this $ftype')</script>";
		}
		
		
		 $sql ="INSERT INTO book(b_id,b_name,b_publisher,b_edition,b_isbn,b_page,b_price,b_img,b_author,b_description) VALUES (0,'$name','$publisher','$edition','$isbn',$page,$price,'$path','$author','$description')";

		
		$result = mysqli_query($conn,$sql);

		if ($result > 0) 
		{
			echo "<script>alert('Data Insert Successfull')</script>";
		}

		else 
		{
			echo "<script>alert('Somthing Went Wrong')</script>";

		}
	}
 ?>
</html>