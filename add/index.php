<?php
 require $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';
 $error= '';
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    $tieude = $_POST['name'];
    $noidung = $_POST['textt'];
    $today = date("Y-m-d"); 
    $error = "Đăng bài viết thành công!";
    // POST image name
    if(isset($_POST['tick'])){
        $image = "/images/".$_FILES['image']['name'];
    } else {
        $image = '';
    }
    

    // image file directory
    $tarPOST = $_SERVER['DOCUMENT_ROOT']."/images/".basename($image);
$sql = "INSERT INTO timeline (title, content, date, image)
VALUES ('$tieude', '$noidung', '$today', '$image')";
   
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $tarPOST)) {
        $msg = "Ảnh đã được upload thành công";
    }else{
        $msg = "Tải lên ảnh thất bại hoặc không có ảnh";
    }
  }
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thêm bài viết - Everyday Tunna</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
</head>
<body>
<div class="container py-5">
<form method="POST" action="index.php" enctype="multipart/form-data">
<label for="name">Tiêu đề:</label><br>
  <input type="text" id="name" name="name"><br><br>
  
  <label for="textt">Nội dung:</label><br>

<textarea id="textt" name="textt" rows="9" cols="48"></textarea><br><br>


  <input type="checkbox" id="tick" name="tick" value="contain_pic" onclick="myFunction()">
  <label for="tick"> Có chứa ảnh</label><br>
  <input type="file" id="image" name="image" style="display:none">
  <br>
  <script type="text/javascript">
    function myFunction() {
        // Get the checkbox
  var checkBox = document.getElementById("tick");
  // Get the output text
  var text = document.getElementById("image");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
  </script>
  <input type="hidden" name="size" value="1000000"> 
<input type="submit" name="submit">
<br><br>
<p><?php echo $error;?></p>
<p><?php echo $msg;?></p>
</form>

    </div>
	<style>
	/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

/* Timeline holder */
ul.timeline {
    list-style-type: none;
    position: relative;
    padding-left: 1.5rem;
}

 /* Timeline vertical line */
ul.timeline:before {
    content: ' ';
    background: #fff;
    display: inline-block;
    position: absolute;
    left: 16px;
    width: 4px;
    height: 100%;
    z-index: 400;
    border-radius: 1rem;
}

li.timeline-item {
    margin: 20px 0;
}

/* Timeline item arrow */
.timeline-arrow {
    border-top: 0.5rem solid transparent;
    border-right: 0.5rem solid #fff;
    border-bottom: 0.5rem solid transparent;
    display: block;
    position: absolute;
    left: 2rem;
}

/* Timeline item circle marker */
li.timeline-item::before {
    content: ' ';
    background: #ddd;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #fff;
    left: 11px;
    width: 14px;
    height: 14px;
    z-index: 400;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}


/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    background: #E8CBC0;
    background: -webkit-linear-gradient(to right, #E8CBC0, #636FA4);
    background: linear-gradient(to right, #E8CBC0, #636FA4);
    min-height: 100vh;
}

.text-gray {
    color: #999;
}
	</style>
	</body>