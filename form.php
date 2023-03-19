<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>


<div class="form_area">
                <h2>Creat Your Virtual ID Card</h2>

                <form action="id.php" method="post" enctype="multipart/form-data">
                <input type="text" name="std_name" placeholder="Enter Name Here" required><br>

                
                <input type="tel" name="std_phone" placeholder="Enter Phone Here" required><br>

                
                <input type="email" name="std_email" placeholder="Enter Email Here" required><br>

                
                <input type="text" name="std_course" placeholder="Enter Course Here"><br>

                
                <input type="text" name="std_batch" placeholder="Enter Batch No. Here"><br>
                <input class="form_img" type="file" name="upload_img"><br>
                <div class="btnn">
                <input name="generate-btn" type="submit" value="Generate ID">
                </div>
                
                </form>
            </div>

</body>
</html> 