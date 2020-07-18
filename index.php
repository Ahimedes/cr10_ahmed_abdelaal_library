<?php require_once 'actions/db-connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>

   <style type ="text/css">
       .manageMedia {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageMedia">
   
   <table border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Teaser</th>
               <th>Name</th>
               <th>Type</th>
               <th>Creator</th>
               <th>Publisher</th>
               <th>Publish Date</th>
               <th>Publisher Size</th>
               <th>Edit</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM media WHERE active = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['teaser']." </td>
                       <td>" .$row['media_name']."</td>
                       <td>" .$row['media_type']."</td>
                       <td>" .$row['creator']."</td>
                       <td>" .$row['publisher_name']."</td>
                       <td>" .$row['publish_date']."</td>
                       <td>" .$row['publisher_size']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

       </tbody>
   </table>
   <a href= "create.php"><button type="button">Add Media</button></a>
</div>

</body>
</html>