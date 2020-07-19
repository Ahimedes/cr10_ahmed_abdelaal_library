<?php require_once 'actions/db-connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type ="text/css">
       .manageMedia {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
           margin-top: 20px;
       }

       .jumbotron {
            background-image: url("image/library.jpg");
            background-size: cover;
            height: 30vw;
       }
   </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">The Big Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Media</a>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
</div>

<div class ="manageMedia">
   
   <table class="table"  cellspacing= "0" cellpadding="0">
       <thead class="thead-light">
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
                           <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-outline-secondary'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-outline-secondary'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

       </tbody>
   </table>
   <a href= "create.php"><button type="button" class="btn btn-outline-secondary">Add Media</button></a>
</div>

</body>
</html>