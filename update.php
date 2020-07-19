<?php 

require_once 'actions/db-connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">The Big Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Media</a>
      </li>
    </ul>
  </div>
</nav>


<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
            <tr>
               <th>Teaser</th>
               <td><input type="text"  name="teaser" placeholder ="Teaser" value="<?php echo $data['teaser'] ?>" /></td>
           </tr>  
           <tr>
               <th>Name</th>
               <td><input type="text"  name="media_name" placeholder ="Name" value="<?php echo $data['media_name'] ?>" /></td>
           </tr>    
           <tr>
               <th>Type</th>
               <td><input type= "text" name="media_type"  placeholder="Type" value ="<?php echo $data['media_type'] ?>" /></td>
           </tr>
           <tr>
               <th>Creator</th>
               <td><input type ="text" name= "creator" placeholder= "Creator" value= "<?php echo $data['creator'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type ="text" name= "publisher_name" placeholder= "Publisher" value= "<?php echo $data['publisher'] ?>" /></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type ="text" name= "publish_date" placeholder= "Publish Date" value= "<?php echo $data['publish_date'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher Size</th>
               <td><input type ="text" name= "publisher_size" placeholder= "Publish Date" value= "<?php echo $data['publisher_size'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>