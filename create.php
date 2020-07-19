<!DOCTYPE html>
<html>
<head>
   <title>Big Library  |  Add Media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
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
   <legend>Add Media</legend>

   <form action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Teaser</th>
               <td><input type="text" name="teaser" placeholder="Teaser" /></td>
           </tr>    
           <tr>
               <th>Name</th>
               <td><input type="text" name= "media_name" placeholder="Name" /></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text"  name="media_type" placeholder ="Type" /></td>
           </tr>
           <tr>
               <th>Creator</th>
               <td><input type="text"  name="creator" placeholder ="Creator" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisher_name" placeholder ="Publisher" /></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text"  name="publish_date" placeholder ="Publish date" /></td>
           </tr>
           <tr>
               <th>Publisher Size</th>
               <td><input type="text"  name="publisher_size" placeholder ="Publisher size" /></td>
           </tr>
           <tr>
               <td><button type ="submit" class="btn btn-outline-secondary">Insert Media</button></td>
               <td><a href= "index.php"><button type="button" class="btn btn-outline-secondary">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>