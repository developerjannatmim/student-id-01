<?php

  if(isset($_POST['generate-btn'])){
    $name = $_POST['std_name'];
    $phone = $_POST['std_phone'];
    $email = $_POST['std_email'];
    $course = $_POST['std_course'];
    $img_name = $_FILES['upload_img']['name'];
    $tmp_name = $_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/".$img_name);
    $batchno = $_POST['std_batch'];
  }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="title">
                    <h1><?php if(isset($name)){echo $name;}?></h1>
                    <p>Birtamode 8 Jhapa, Nepal</p>
                </div>
                <div class="image">
                    <div class="outer">
                        <div class="inner">
                            <img src="upload/<?php if(isset($img_name)){ echo $img_name;}?>" alt="picture">
                        </div>
                    </div>
                </div>
                <div class="name">
                <?php if(isset($name)){echo $name;}?>
                </div>
                <div class="details">
                    <div class="col">
                        <ul type="none">
                            <li><b>Name: </b><?php if(isset($name)){echo $name;}?></li>
                            <li><b>Phone: </b><?php if(isset($phone)){echo $phone;}?></li>
                            <li><b>Email No: </b><?php if(isset($email)){echo $email;}?></li>
                            <li><b>Course Name: </b><?php if(isset($course)){echo $course;}?></li>
                            <li><b>Batch No: </b><?php if(isset($batchno)){echo $batchno;}?></li>
                        </ul>
                    </div>
                    <div class="col">
                        <img src="school-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
