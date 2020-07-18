<?php 

require_once 'db-connect.php';

if ($_POST) {
    $teaser = $_POST['teaser'];
    $media_name = $_POST['media_name'];
    $media_type = $_POST['media_type'];
    $creator = $_POST['creator'];
    $publisher = $_POST['publisher_name'];
    $publish_date = $_POST['publish_date'];
    $publisher_size = $_POST['publisher_size'];
    $id = $_POST['id'];

   $sql = "UPDATE media SET teaser = '$teaser', media_name = '$media_name', media_type = '$media_type', creator = '$creator', publisher_name = '$publisher', publish_date = '$publish_date', publisher_size = '$publisher_size' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>