<?php 

require_once 'db-connect.php';

if ($_POST) {
   $teaser = $_POST['teaser'];
   $media_name = $_POST['media_name'];
   $media_type = $_POST['media_type'];
   $creator = $_POST['creator'];
   $publisher_name = $_POST['publisher_name'];
   $publish_date = $_POST['publish_date'];
   $publisher_size = $_POST['publisher_size'];

   $sql = "INSERT INTO media (teaser, media_name, media_type, creator, publisher_name, publish_date, publisher_size) 
   VALUES ('$teaser', '$media_name', '$media_type', '$creator', '$publisher_name', '$publish_date', '$publisher_size')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>