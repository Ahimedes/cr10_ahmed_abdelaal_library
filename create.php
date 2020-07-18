<!DOCTYPE html>
<html>
<head>
   <title>Big Library  |  Add Media</title>

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
               <td><button type ="submit">Insert Media</button></td>
               <td><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>